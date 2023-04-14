<?php

namespace App\Http\Controllers;

use App\Models\MenuItems;
use App\Models\MenuType;
use Illuminate\Http\Request;

class MenuItemsController extends Controller
{
    public function index()
    {

        $menuItems = MenuItems::with('menuType')->get();

        return view('admin.frontend.menu.menu_item_all', compact('menuItems'));
    }


    public function create()
    {
        $menuTypes = MenuType::get();
        return view('admin.frontend.menu.menu_item_create', compact('menuTypes'));
    }

    public function store(Request $request)
    {


        $request = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|between:0.01,9999.99',
            'menu_type_id' => 'required|exists:menu_types,id',
            'visibility' => 'required|boolean',
        ]);

        $menuItems = new MenuItems();

        $menuItems->name = $request['name'];
        $menuItems->description = $request['description'];
        $menuItems->price = $request['price'];
        $menuItems->visibility = $request['visibility'];
        $menuItems->menu_type_id = $request['menu_type_id'];

        $menuItems->save();

        $notification = [
            'message' => 'Menu Item Created Success Fully',
            'alert-type' => 'success'
        ];

        return redirect()->route('fn.menu_item')->with($notification);
    }

    public function edit($id)
    {
        $menuTypes =  MenuType::get();
        $menuItem = MenuItems::with('menuType')->findOrFail($id);

        return view('admin.frontend.menu.menu_item_edit', compact('menuTypes', 'menuItem'));
    }


    public function update(Request $request, $id)
    {
        $menuItem = MenuItems::findOrFail($id);
        $request = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|numeric|between:0.01,9999.99',
            'menu_type_id' => 'required|exists:menu_types,id',
            'visibility' => 'required|boolean',
        ]);

        $menuItem->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'menu_type_id' => $request['menu_type_id'],
            'visibility' => $request['visibility'],
        ]);
        $notification = [
            'message' => 'Menu Item Updated Success Fully',
            'alert-type' => 'success'
        ];

        return redirect()->route('fn.menu_item')->with($notification);
    }

    public function destroy($id)
    {
        $menuItem = MenuItems::findOrFail($id);

        $menuItem->delete();
    }
}

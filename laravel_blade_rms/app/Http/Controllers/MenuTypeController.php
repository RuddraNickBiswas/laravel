<?php

namespace App\Http\Controllers;

use App\Models\MenuType;
use Illuminate\Http\Request;

class MenuTypeController extends Controller
{
    public function index()
    {
        $menuTypes = MenuType::get();

        return view('admin.frontend.menu.menu_type_all', compact('menuTypes'));
    }


    public function create()
    {
        return view('admin.frontend.menu.menu_type_create');
    }

    public function store(Request $request)
    {
        $request = $request->validate([
            'name' => 'required|string|max:255',
            'visibility' => 'required|boolean',
        ]);

        $menuType = new MenuType();

        $menuType->name = $request['name'];
        $menuType->visibility = $request['visibility'];

        $menuType->save();

        $notification = [
            'message' => 'Menu Type Created Success Fully',
            'alert-type' => 'success'
        ];

        return redirect()->route('fn.menu_type')->with($notification);
    }

    public function edit($id)
    {

        $menuType = MenuType::findOrFail($id);

        return view('admin.frontend.menu.menu_type_edit', compact('menuType'));
    }

    public function update(Request $request, $id)
    {
        $request = $request->validate([
            'name' => 'required|string|max:255',
            'visibility' => 'required|boolean',
        ]);

        $menuType = MenuType::findOrFail($id);

        $menuType->update([
            'name' => $request['name'],
            'visibility' => $request['visibility'],
        ]);

        $notification = [
            'message' => 'Menu Type Updated Success Fully',
            'alert-type' => 'success'
        ];

        return redirect()->route('fn.menu_type')->with($notification);
    }


    public function destroy($id)
    {
        $menuType = MenuType::findOrFail($id);


        $menuType->delete();
    }
}

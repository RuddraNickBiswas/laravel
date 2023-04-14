<?php

namespace App\Http\Controllers;

use App\Models\MenuSectionTitle;
use Illuminate\Http\Request;

class MenuSectionTitleController extends Controller
{
     public function edit()
    {

        $menuTitle = MenuSectionTitle::find(1);

        return view('admin.frontend.menu.menu_title_edit', compact('menuTitle'));
    }

    public function update(Request $request, $id)
    {
        $menuTitle = MenuSectionTitle::findOrFail($id);



        $request->validate([
            'title' => 'required|string|max:255',
            'title_colored' => 'required|string|max:255',
            
        ]);
        $menuTitle->update([
            'title' => $request->title,
            'title_colored' => $request->title_colored,
        ]);
        $notification = array(
            'message' => 'Menu Main Title Updated Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

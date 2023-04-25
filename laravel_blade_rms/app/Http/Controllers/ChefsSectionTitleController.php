<?php

namespace App\Http\Controllers;

use App\Models\ChefsSectionTitle;
use Illuminate\Http\Request;

class ChefsSectionTitleController extends Controller
{
    public function edit()
    {

        $chefsTitle = ChefsSectionTitle::find(1);

        return view('admin.frontend.chefs.chefs_title_edit', compact('chefsTitle'));
    }

    public function update(Request $request, $id)
    {
        $chefsTitle = ChefsSectionTitle::findOrFail($id);


        $request->validate([
            'title_first' => 'required|string|max:255',
            'title_last' => 'required|string|max:255',
            'description' => 'required|string',
            'visibility' => 'required|boolean',
        ]);
        $chefsTitle->update([
            'title_first' => $request->title_first,
            'title_last' => $request->title_last,
            'description' => $request->description,
            'visibility' => $request->visibility,
        ]);
        $notification = array(
            'message' => 'Chefs Section main Title Updated Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

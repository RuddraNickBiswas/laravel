<?php

namespace App\Http\Controllers;

use App\Models\SpecialSectionTitle;
use Illuminate\Http\Request;

class SpecialSectionTitleController extends Controller
{

 public function edit()
    {

        $specialSectionTitle = SpecialSectionTitle::find(1);

        return view('admin.frontend.special.special_title_edit', compact('specialSectionTitle'));
    }

    public function update(Request $request, $id)
    {
       $specialSectionTitle = SpecialSectionTitle::findOrFail($id);


        $request->validate([
            'title_first' => 'required|string|max:255',
            'title_last' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'visibility' => 'required|boolean',
        ]);
        $specialSectionTitle->update([
            'title_first' => $request->title_first,
            'title_last' => $request->title_last,
            'description' => $request->description,
            'visibility' => $request->visibility,
        ]);
        $notification = array(
            'message' => 'Special Section Main Title Updated Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
}
}
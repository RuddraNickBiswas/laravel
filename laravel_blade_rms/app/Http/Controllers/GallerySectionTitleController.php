<?php

namespace App\Http\Controllers;

use App\Models\GallerySectionTitle;
use Illuminate\Http\Request;

class GallerySectionTitleController extends Controller
{
    public function edit()
    {

        $galleryTitle = GallerySectionTitle::find(1);

        return view('admin.frontend.gallery.gallery_title_edit', compact('galleryTitle'));
    }

    public function update(Request $request, $id)
    {
        $eventTitle = GallerySectionTitle::findOrFail($id);


        $request->validate([
            'title_first' => 'required|string|max:255',
            'title_last' => 'required|string|max:255',
            'description' => 'required|string',
            'visibility' => 'required|boolean',
        ]);
        $eventTitle->update([
            'title_first' => $request->title_first,
            'title_last' => $request->title_last,
            'description' => $request->description,
            'visibility' => $request->visibility,
        ]);
        $notification = array(
            'message' => 'Gallery Main Title Updated Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

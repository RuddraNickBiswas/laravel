<?php

namespace App\Http\Controllers;

use App\Models\ContactSectionTitle;
use Illuminate\Http\Request;

class ContactSectionTitleController extends Controller
{
    public function edit()
    {

        $contactTitle = ContactSectionTitle::find(1);

        return view('admin.frontend.contact.contact_title_edit', compact('contactTitle'));
    }

    public function update(Request $request, $id)
    {
        $contactTitle = ContactSectionTitle::findOrFail($id);


        $request->validate([
            'title_first' => 'required|string|max:255',
            'title_last' => 'required|string|max:255',
            'description' => 'required|string',
            'g_map_link' => 'required|string',
            'visibility' => 'required|boolean',
        ]);
        $contactTitle->update([
            'title_first' => $request->title_first,
            'title_last' => $request->title_last,
            'description' => $request->description,
            'g_map_link' => $request->g_map_link,
            'visibility' => $request->visibility,
        ]);
        $notification = array(
            'message' => 'Contact Section main Title Updated Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

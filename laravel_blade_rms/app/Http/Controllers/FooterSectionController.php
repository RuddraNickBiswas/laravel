<?php

namespace App\Http\Controllers;

use App\Models\FooterSection;
use Illuminate\Http\Request;

class FooterSectionController extends Controller
{


    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $footer = FooterSection::find(1);

        return view('admin.frontend.footer.footer_edit', compact("footer"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'skype' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'visibility' => 'required|boolean',
            'cr_title' => 'required|string|max:255',
            'cr_by' => 'required|string|max:255',
            'cr_visibility' => 'required|boolean'
        ]);

        $footer = FooterSection::find($id);

        $footer->update([
            'title' => $request->title,
            'description' => $request->description,
            'twitter' => $request->twitter ?? null,
            'facebook' => $request->facebook ?? null,
            'instagram' => $request->instagram ?? null,
            'skype' => $request->skype ?? null,
            'linkedin' => $request->linkedin ?? null,
            'visibility' => $request->visibility,
            'cr_title' => $request->cr_title,
            'cr_by' => $request->cr_by,
            'cr_visibility' => $request->cr_visibility
        ]);

        $notification = array(
            'message' => 'Footer Section Updated Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

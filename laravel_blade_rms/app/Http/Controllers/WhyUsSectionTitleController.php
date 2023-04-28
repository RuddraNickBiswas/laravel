<?php

namespace App\Http\Controllers;

use App\Models\WhyUsSectionTitle;
use Illuminate\Http\Request;

class WhyUsSectionTitleController extends Controller
{
    public function edit()
    {

        $whyUsTitle = WhyUsSectionTitle::find(1);

        return view('admin.frontend.why_us.why_us_title_edit', compact('whyUsTitle'));
    }

    public function update(Request $request, $id)
    {
        $whyUsTitle = WhyUsSectionTitle::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'title_colored' => 'required|string|max:255',
            'description' => 'required|string',
            'visibility' => 'required|boolean',
        ]);

        $whyUsTitle->update([
            'title' => $request->title,
            'title_colored' => $request->title_colored,
            'description' => $request->description,
            'visibility' => $request->visibility,
        ]);
        $notification = array(
            'message' => 'Why Is Title Updated Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

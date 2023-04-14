<?php

namespace App\Http\Controllers;

use App\Models\WhyUsSection;
use Illuminate\Http\Request;

class WhyUsSectionController extends Controller
{
    public function index()
    {

        $whyUs = WhyUsSection::get();

        return view('admin.frontend.why_us.why_us_all', compact('whyUs'));
    }

    public function edit($id)
    {
        $whyUs = WhyUsSection::findOrFail($id);

        return view('admin.frontend.why_us.why_us_edit', compact('whyUs'));
    }

    public function update(Request $request, $id)
    {
        $whyUs = WhyUsSection::findOrFail($id);
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'visibility' => 'required|boolean',

        ]);

        $whyUs->update([
            'title' => $request->title,
            'description' => $request->description,
            'visibility' => $request->visibility
        ]);
        $notification = array(
            'message' => 'Why Is Section Updated Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.why_us')->with($notification);
    }
}

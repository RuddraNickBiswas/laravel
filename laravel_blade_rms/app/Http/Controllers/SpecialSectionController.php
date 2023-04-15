<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialSectionRequest;
use App\Models\SpecialSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SpecialSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialSection = SpecialSection::get();

        return view('admin.frontend.special.special_all', compact('specialSection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frontend.special.special_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SpecialSectionRequest $request)
    {
        $request->validated();

        if ($request->hasFile('image')) {
            try {
                $image = $request->file('image');
                $imagePath = 'frontend/special/' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image = Image::make($image)->fit(800, 822);
                Storage::disk('appPublic')->put($imagePath, $image->stream());
            } catch (\Exception $e) {
                return back()->withErrors(['msg' => 'Error uploading image: ' . $e->getMessage()]);
            }
        };

        $specialSection = new SpecialSection;

        $specialSection->tab_name = $request->tab_name;
        $specialSection->title = $request->title;
        $specialSection->title_italic = $request->title_italic;
        $specialSection->description = $request->description;
        $specialSection->image = $imagePath;
        $specialSection->visibility = $request->visibility;

        $specialSection->save();

        $notification = array(
            'message' => 'Special Section Create Success Fully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.hero.show')->with($notification);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $specialSection = SpecialSection::findOrFail($id);

        return view('admin.frontend.special.special_edit', compact('specialSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SpecialSectionRequest $request, $id)
    {
        $specialSection = SpecialSection::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('appPublic')->delete($specialSection->image);
        }

        $imagePath = $specialSection->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'frontend/special/' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image = Image::make($image)->fit(800, 822);
            Storage::disk('appPublic')->put($imagePath, $image->stream());
        }

        $specialSection->update([
            'tab_name' => $request->tab_name,
            'title' => $request->title,
            'title_italic' => $request->title_italic,
            'description' => $request->description,
            'visibility' => $request->visibility,
            'image' => $imagePath,
        ]);
        $notification = array(
            'message' => 'Special Section Update Success',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.special.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $specialSection = SpecialSection::findOrFail($id);

        if ($specialSection->image) {
            Storage::disk('appPublic')->delete($specialSection->image);
        }

        $specialSection->delete();

        $notification = array(
            'message' => 'Special Section deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.special.index')->with($notification);
    }
}

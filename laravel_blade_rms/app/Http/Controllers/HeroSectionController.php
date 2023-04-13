<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeroSectionStoreRequest;
use App\Http\Requests\HeroSectionUpdateRequest;
use App\Models\HeroSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class HeroSectionController extends Controller
{
    public function show()
    {

        $heroSection = HeroSection::get();

        return view('admin.frontend.hero.all_slider', compact('heroSection'));
    }

    public function create()
    {

        return view('admin.frontend.hero.hero_create');
    }


    public function store(HeroSectionStoreRequest $request)
    {
        $request->validated();
        $imagePath = null;
        if ($request->hasFile('bg_image')) {
            try {
                $image = $request->file('bg_image');
                $imagePath = 'frontend/hero/' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image = Image::make($image)->fit(1920, 1123);
                Storage::disk('appPublic')->put($imagePath, $image->stream());
            } catch (\Exception $e) {
                // Handle the exception here, for example:
                return back()->withErrors(['msg' => 'Error uploading image: ' . $e->getMessage()]);
            }
        }

        $heroSection = new HeroSection;
        $heroSection->title = $request->title;
        $heroSection->description = $request->description;
        $heroSection->visibility = $request->visibility;
        $heroSection->bg_image = $imagePath;

        $heroSection->save();
        $notification = array(
            'message' => 'Hero Slider Create Success Fully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.hero.show')->with($notification);
    }
    public function edit($id)
    {
        $heroSection = HeroSection::find($id);

        return view('admin.frontend.hero.hero_edit', compact('heroSection'));
    }

    public function update(HeroSectionUpdateRequest $request, $id)
    {
        $request->validated();

        $heroSection = HeroSection::findOrFail($id);

        //Delete the previous image 

        if ($request->hasFile('bg_image')) {
            Storage::disk('appPublic')->delete($heroSection->bg_image);
        }

        $imagePath = $heroSection->bg_image;

        if ($request->hasFile('bg_image')) {
            $image = $request->file('bg_image');
            $imagePath = 'frontend/hero/' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image = Image::make($image)->fit(1920, 1123);
            Storage::disk('appPublic')->put($imagePath, $image->stream());
        }

        $heroSection->update([
            'title' => $request->title,
            'description' => $request->description,
            'visibility' => $request->visibility,
            'bg_image' => $imagePath
        ]);

        $notification = [
            'message' => 'Hero Slider Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('fn.hero.show')->with($notification);
    }


    public function destroy($id)
    {
        $heroSection = HeroSection::find($id);

        if ($heroSection->bg_image) {
            Storage::disk('appPublic')->delete($heroSection->bg_image); // delete image file
        }

        $heroSection->delete(); // delete record

        $notification = array(
            'message' => 'Hero Slider Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.hero.show')->with($notification);
    }
}

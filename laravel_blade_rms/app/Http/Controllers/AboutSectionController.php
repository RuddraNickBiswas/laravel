<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAboutSectionRequest;
use App\Models\AboutSection;
use Illuminate\Support\Facades\Storage;
use Image;

class AboutSectionController extends Controller
{



    public function edit()
    {
        $aboutSection = AboutSection::find(1);

        return view('admin.frontend.about.about_edit', compact("aboutSection"));
    }


    public function update(UpdateAboutSectionRequest $request, $id)
    {
        $request->validated();

        $aboutSection = AboutSection::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('appPublic')->delete($aboutSection->image);
        }

        $imagePath = $aboutSection->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'frontend/about/' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image = Image::make($image)->fit(1024, 683);
            Storage::disk('appPublic')->put($imagePath, $image->stream());
        }

        $aboutSection->update([
            'title' => $request->title,
            'title_bold' => $request->title_bold,
            'description_top' => $request->description_top,
            'description_italic' => $request->description_italic,
            'main_point_1' => $request->main_point_1,
            'main_point_2' => $request->main_point_2,
            'main_point_3' => $request->main_point_3,
            'description_bottom' => $request->description_bottom,
            'video_url' => $request->video_url,
            'visibility' => $request->visibility,
            'image' => $imagePath,
        ]);
$notification = array(
            'message' => 'About Section Update Success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

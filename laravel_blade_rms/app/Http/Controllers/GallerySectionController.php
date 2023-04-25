<?php

namespace App\Http\Controllers;

use App\Models\GallerySection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class GallerySectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallerys = GallerySection::get();

        return view('admin.frontend.gallery.gallery_all', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frontend.gallery.gallery_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:30000' // validate multiple image uploads
        ]);
        $images = $request->file('images');


        foreach ($images as $image) {

            $imagePath = '';

            try {
                $imagePath = 'frontend/gallery/' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image = Image::make($image)->fit(800, 600);
                Storage::disk('appPublic')->put($imagePath, $image->stream());
            } catch (\Exception $e) {
                dd($e->getMessage());
                return back()->withErrors(['msg' => 'Error uploading image: ' . $e->getMessage()]);
            }
            $gallery = new GallerySection();
            $gallery->image = $imagePath;
            $gallery->save();
        }
        $notification = array(
            'message' => 'Gallery Image added successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.gallery.index')->with($notification);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = GallerySection::findOrFail($id);

        return view('admin.frontend.gallery.gallery_edit', compact('gallery'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:30000' // validate multiple image uploads
        ]);


        $gallery = GallerySection::findOrFail($id);


        if ($request->hasFile('image')) {
            Storage::disk('appPublic')->delete($gallery->image);
        };

        $imagePath = $gallery->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'frontend/gallery/' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image = Image::make($image)->fit(800, 600);
            Storage::disk('appPublic')->put($imagePath, $image->stream());
        }

        $gallery->update([
            'image' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Gallery Image updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.gallery.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = GallerySection::findOrFail($id);

        if ($gallery->image) {
            Storage::disk('appPublic')->delete($gallery->image);
        }

        $gallery->delete();


        $notification = array(
            'message' => 'Gallery Image deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.gallery.index')->with($notification);
    }
}

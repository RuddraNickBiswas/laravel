<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::get();

        return view('admin.frontend.testimonial.testimonial_all', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frontend.testimonial.testimonial_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonialRequest $request)
    {
        $validatedData = $request->validated();

        $imagePath = '';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'frontend/testimonials/' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image = Image::make($image)->fit(400, 400);
            Storage::disk('appPublic')->put($imagePath, $image->stream());
        }

        $testimonial = new Testimonial();
        $testimonial->image = $imagePath;
        $testimonial->name = $validatedData['name'];
        $testimonial->post = $validatedData['post'];
        $testimonial->description = $validatedData['description'];
        $testimonial->rating = $validatedData['rating'];
        $testimonial->visibility = $validatedData['visibility'];
        $testimonial->save();

        $notification = array(
            'message' => 'Testimonial Created Success',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.testimonials.index')->with($notification);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        return view('admin.frontend.testimonial.testimonial_edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonialRequest $request, $id)
    {
        $validatedData = $request->validated();
        $testimonial = Testimonial::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('appPublic')->delete($testimonial->image);
        };

        $imagePath = $testimonial->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'frontend/testimonials/' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image = Image::make($image)->fit(400, 400);
            Storage::disk('appPublic')->put($imagePath, $image->stream());
        }

        $testimonial->update([
            'image' => $imagePath,
            'name' => $validatedData['name'],
            'post' => $validatedData['post'],
            'description' => $validatedData['description'],
            'rating' => $validatedData['rating'],
            'visibility' => $validatedData['visibility'],
        ]);


        $notification = array(
            'message' => 'Testimonial Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.testimonials.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);


        if ($testimonial->image) {
            Storage::disk('appPublic')->delete($testimonial->image);
        }

        $testimonial->delete();


        $notification = array(
            'message' => 'testimonial deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.testimonials.index')->with($notification);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChefsRequest;
use App\Models\Chefs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ChefsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chefs = Chefs::get();

        return view('admin.frontend.chefs.chefs_all', compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frontend.chefs.chefs_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ChefsRequest $request)
    {
        $validatedData = $request->validated();

        $imagePath = '';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'frontend/chefs/' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image = Image::make($image)->fit(600, 600);
            Storage::disk('appPublic')->put($imagePath, $image->stream());
        }

        $chef = new Chefs();
        $chef->image = $imagePath;
        $chef->name = $validatedData['name'];
        $chef->post = $validatedData['post'];
        $chef->twitter = $validatedData['twitter'];
        $chef->facebook = $validatedData['facebook'];
        $chef->instagram = $validatedData['instagram'];
        $chef->linkedin = $validatedData['linkedin'];
        $chef->visibility = $validatedData['visibility'];
        $chef->save();


        $notification = array(
            'message' => 'Chefs Created Success',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.chefs.index')->with($notification);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $chef = Chefs::findOrFail($id);

        return view('admin.frontend.chefs.chefs_edit', compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChefsRequest $request, $id)
    {
        $validatedData = $request->validated();
        $chef = Chefs::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('appPublic')->delete($chef->image);
        };

        $imagePath = $chef->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'frontend/chefs/' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image = Image::make($image)->fit(600, 600);
            Storage::disk('appPublic')->put($imagePath, $image->stream());
        }

        $chef->update([
            'image' => $imagePath,
            'name' => $validatedData['name'],
            'post' => $validatedData['post'],
            'twitter' => $validatedData['twitter'] ?? null,
            'facebook' => $validatedData['facebook'] ?? null,
            'instagram' => $validatedData['instagram'] ?? null,
            'linkedin' => $validatedData['linkedin'] ?? null,
            'visibility' => $validatedData['visibility']
        ]);


        $notification = array(
            'message' => 'Events Update Success',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.event.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $chef = Chefs::findOrFail($id);


        if ($chef->image) {
            Storage::disk('appPublic')->delete($chef->image);
        }

        $chef->delete();


        $notification = array(
            'message' => 'chef deleted successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.chefs.index')->with($notification);
    }
}

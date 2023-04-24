<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventSectionRequest;
use App\Models\EventSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class EventSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = EventSection::get();

        return view('admin.frontend.event.event_all', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frontend.event.event_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventSectionRequest $request)
    {
        $validatedData = $request->validated();

        $imagePath = '';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'frontend/events/' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image = Image::make($image)->fit(1024, 683);
            Storage::disk('appPublic')->put($imagePath, $image->stream());
        }

        $event = new EventSection([
            'title' => $validatedData['title'],
            'price' => $validatedData['price'],
            'description_top' => $validatedData['description_top'],
            'point_1' => $validatedData['point_1'],
            'point_2' => $validatedData['point_2'],
            'point_3' => $validatedData['point_3'],
            'description_bottom' => $validatedData['description_bottom'],
            'image' => $imagePath,
            'visibility' => $validatedData['visibility'],
        ]);

        $event->save();

        $notification = array(
            'message' => 'Events Created Success',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.event.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(EventSection $eventSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $event = EventSection::findOrFail($id);

        return view('admin.frontend.event.event_edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventSectionRequest $request, $id)
    {
        $event = EventSection::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('appPublic')->delete($event->image);
        };

        $imagePath = $event->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'frontend/events/' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image = Image::make($image)->fit(1024, 683);
            Storage::disk('appPublic')->put($imagePath, $image->stream());
        }

        $event->update([
            'title' => $request->title,
            'price' => $request->price,
            'description_top' => $request->description_top,
            'point_1' => $request->point_1,
            'point_2' => $request->point_2,
            'point_3' => $request->point_3,
            'description_bottom' => $request->description_bottom,
            'image' => $imagePath,
            'visibility' => $request->has('visibility')
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
    public function destroy(EventSection $eventSection)
    {
        //
    }
}

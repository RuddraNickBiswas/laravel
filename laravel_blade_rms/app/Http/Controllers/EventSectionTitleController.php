<?php

namespace App\Http\Controllers;

use App\Models\EventSectionTitle;
use Illuminate\Http\Request;

class EventSectionTitleController extends Controller
{
  public function edit()
    {

        $eventTitle = EventSectionTitle::find(1);

        return view('admin.frontend.event.event_title_edit', compact('eventTitle'));
    }

    public function update(Request $request, $id)
    {
       $eventTitle = EventSectionTitle::findOrFail($id);


        $request->validate([
            'title_first' => 'required|string|max:255',
            'title_middle' => 'required|string|max:255',
            'title_last' => 'required|string|max:255',
            'visibility' => 'required|boolean',
        ]);
        $eventTitle->update([
            'title_first' => $request->title_first,
            'title_middle' => $request->title_middle,
            'title_last' => $request->title_last,
            'visibility' => $request->visibility,
        ]);
        $notification = array(
            'message' => 'Event Main Title Updated Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
}
}

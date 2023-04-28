<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $contactMessage = ContactMessage::get();

        return view('admin.frontend.contact.contact_message_all', compact('contactMessage'));
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        ContactMessage::create($validatedData);

        $notification = array(
            'message' => 'Contact Message Send Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit($id)
    {
        $contactMessage = ContactMessage::findOrFail($id);

        return view('admin.frontend.contact.contact_message_edit', compact('contactMessage'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactMessage $contactMessage)
    {
           return redirect()->route('fn.contact_message.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         $contactMessage = ContactMessage::findOrFail($id);

        $contactMessage->delete();

        $notification = array(
            'message' => 'Contact Message Deleted Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.contact_message.index')->with($notification);
    }
}

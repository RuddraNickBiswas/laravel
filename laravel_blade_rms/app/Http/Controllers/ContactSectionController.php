<?php

namespace App\Http\Controllers;

use App\Models\ContactSection;
use Illuminate\Http\Request;

class ContactSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = ContactSection::get();

        return view('admin.frontend.contact.contact_all', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.frontend.contact.contact_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'first_line' => 'required|string|max:255',
            'second_line' => 'required|string',
            'visibility' => 'required|boolean',
        ]);

        $contact = new ContactSection([
            'title' => $request->title,
            'first_line' => $request->first_line,
            'second_line' => $request->second_line,
        ]);

        $contact->save();

        $notification = array(
            'message' => 'Contact Created Success',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.contact.index')->with($notification);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact = ContactSection::findOrFail($id);

        return view('admin.frontend.contact.contact_edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'first_line' => 'required|string|max:255',
            'second_line' => 'required|string',
            'visibility' => 'required|boolean',
        ]);


        $contact = ContactSection::findOrFail($id);


        $contact->update([
            'title' => $request->title,
            'first_line' => $request->first_line,
            'second_line' => $request->second_line,
        ]);


        $notification = array(
            'message' => 'Contact Updated Success',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.contact.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = ContactSection::findOrFail($id);

        $contact->delete();


        $notification = array(
            'message' => 'Contact Deleted Success',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.contact.index')->with($notification);
    }
}

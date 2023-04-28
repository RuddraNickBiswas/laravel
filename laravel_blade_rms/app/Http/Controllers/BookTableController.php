<?php

namespace App\Http\Controllers;

use App\Models\BookTable;
use Illuminate\Http\Request;

class BookTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookTableAll = BookTable::get();

        return view('admin.frontend.book_table.book_table_all', compact('bookTableAll'));
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|min:4',
            'email' => 'required|email',
            'phone' => 'required|string|min:11|max:30',
            'date' => 'required|string|min:4',
            'time' => 'required|string|min:4',
            'people' => 'required|integer|min:1',
            'message' => 'nullable|string',
        ]);

        $booking = new BookTable;
        $booking->name = $validatedData['name'];
        $booking->email = $validatedData['email'];
        $booking->phone = $validatedData['phone'];
        $booking->date = $validatedData['date'];
        $booking->time = $validatedData['time'];
        $booking->people = $validatedData['people'];
        $booking->message = $validatedData['message'];
        $booking->save();

        $notification = array(
            'message' => 'Book Table Message Sended',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bookTable = BookTable::findOrFail($id);

        return view('admin.frontend.book_table.book_table_edit', compact('bookTable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,confirmed,rejected',
        ]);

        $bookTable = BookTable::findOrFail($id);
        $bookTable->status = $request->status;
        $bookTable->save();
        $notification = array(
            'message' => 'Book Table Status Updated Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.book_table.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bookTable = BookTable::findOrFail($id);

        $bookTable->delete();

        $notification = array(
            'message' => 'Book Table Deleted Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->route('fn.book_table.index')->with($notification);
    }
}

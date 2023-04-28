<?php

namespace App\Http\Controllers;

use App\Models\BookTableSectionTitle;
use Illuminate\Http\Request;

class BookTableSectionTitleController extends Controller
{
    public function edit()
    {

        $bookTableTitle = BookTableSectionTitle::find(1);

        return view('admin.frontend.book_table.book_table_title_edit', compact('bookTableTitle'));
    }

    public function update(Request $request, $id)
    {
        $bookTableTitle = BookTableSectionTitle::findOrFail($id);


        $request->validate([
            'title_first' => 'required|string|max:255',
            'title_last' => 'required|string|max:255',
            'description' => 'required|string',
            'visibility' => 'required|boolean',
        ]);
        $bookTableTitle->update([
            'title_first' => $request->title_first,
            'title_last' => $request->title_last,
            'description' => $request->description,
            'visibility' => $request->visibility,
        ]);
        $notification = array(
            'message' => 'Book Table Main Title Updated Sueecssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}

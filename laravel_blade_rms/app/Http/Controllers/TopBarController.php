<?php

namespace App\Http\Controllers;

use App\Http\Requests\TopBarUpdateRequest;
use App\Models\TopBar;
use Illuminate\Http\Request;

class TopBarController extends Controller
{
    public function edit()
    {
        $topBar = TopBar::find(1);
        return view('admin.frontend.topbar.edit_topbar', compact('topBar'));
    }
    public function update(TopBarUpdateRequest $request, $id)
    {
        $topBar = TopBar::findOrFail($id);
        $topBar->update($request->validated());

        $notification = array(
            'message' => 'Top Bar Update Successfull',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminProfileStoreRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('admin.admin_login');
    }

    public function register()
    {
        return view('admin.admin_register');
    }


    public function adminProfile()
    {
        $id = Auth::user()->id;

        $adminData = User::find($id);

        return view('admin.admin_profile', compact('adminData'));
    }

    public function adminProfileStore(AdminProfileStoreRequest $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->company = $request->company;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('backend/upload/admin_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('/backend/upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }



    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}

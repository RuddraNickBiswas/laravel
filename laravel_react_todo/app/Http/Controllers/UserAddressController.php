<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserAddressRequest;
use App\Http\Requests\UpdateUserAddressRequest;
use App\Http\Resources\UserAddressResource;
use App\Models\UserAddress;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($userId)
    {
        
        // $userId = auth()->user()->id;

        $userAddress = UserAddress::where('user_id', $userId )->get();

        return response(
            UserAddressResource::collection($userAddress) 
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserAddressRequest $request)
    {

        $userId = auth()->user()->id;

        //Check if user already has an address

        $exustubgAddress = UserAddress::where('user_id', $userId)->first();

        if ($exustubgAddress) {
            return response([
                'message' => 'User already has an address'
            ], 400);
        }

        $data = $request->validated();
        $userAddress = UserAddress::create([
            'user_id' => $userId,
            'address' => $data['address'],
            'visibility' => $data['visibility'],
        ]);

        return response([
            'address' => $userAddress,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(UserAddress $userAddress)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserAddressRequest $request, $id)
    {
        $userAddress = UserAddress::where('id', $id)->where('user_id', auth()->user()->id)->firstOrFail();

        $data = $request->validated();
        $userAddress->update([
            'address' => $data['address'],
            'visibility' => $data['visibility'],
        ]);

        return response([
            'success' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $userAddress = UserAddress::where('id', $id)
                ->where('user_id', auth()->user()->id)
                ->firstOrFail();
    
            $userAddress->delete();
    
            return response([
                'message' => 'User Address Deleted Successfully',
            ]);
        } catch (ModelNotFoundException $e) {
            return response([
                'message' => 'User Address not found',
            ], 404);
        }
    }
}

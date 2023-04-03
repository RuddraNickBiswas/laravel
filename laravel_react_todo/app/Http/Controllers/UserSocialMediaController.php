<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserSocialMediaRequest;
use App\Http\Requests\UpdateUserSocialMediaRequest;
use App\Http\Resources\UserSocialMediaResource;
use App\Models\UserSocialMedia;

class UserSocialMediaController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $userId = auth()->user()->id;

    $userSocialMedia = UserSocialMedia::where('user_id', $userId)->get();

    return  UserSocialMediaResource::collection( $userSocialMedia);
  }


  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreUserSocialMediaRequest $request)
  {
    $userId = auth()->user()->id;

    $data = $request->validated();

    $socialMedia =  UserSocialMedia::create([
      "user_id" => $userId,
      "social_media_name" => $data['social_media_name'],
      "social_media_link" => $data['social_media_link'],
      "visibility" => $data['visibility'],
    ]);


    return response([
      'socialMedia' => $socialMedia
    ]);
  }

  /**
   * Display the specified resource.
   */
  public function show(UserSocialMedia $userSocialMedia)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(UserSocialMedia $userSocialMedia)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateUserSocialMediaRequest $request, $id)
  {
    $userId = auth()->user()->id;

    $data = $request->validated();

    $socialMedia = UserSocialMedia::where('id', $id)->where('user_id', $userId)->firstOrFail();
    $socialMedia->update([
      'social_media_name' => $data['social_media_name'],
      'social_media_link' => $data['social_media_link'],
      'visibility' => $data['visibility'],
    ]);

    return response(
      [
      'message' => 'Social Media Link Updated Successfully ',
      ]
      );
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id)
  {
    $userId = auth()->user()->id;
    $socialMedia = UserSocialMedia::where('id', $id)->where('user_id', $userId)->firstOrFail();

    $socialMedia->delete();


    return response([
      'message' => 'Social Media Link Deleted Successfully ',
    ]);
  }
}

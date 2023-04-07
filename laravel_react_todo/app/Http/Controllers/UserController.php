<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserSocialMediaRequest;
use App\Http\Requests\UpdateUserDetailsRequest;
use App\Http\Resources\UserInformationResource;
use App\Http\Resources\UserShowResource;
use App\Http\Resources\UserSkillIndexResource;
use App\Http\Resources\UserSocialMediaResource;
use App\Models\Skills;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserSkills;
use App\Models\UserSocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class UserController extends Controller
{

    public function index()
    {
        $user = auth()->user();

        return response([
            'user' => $user,
        ]);
    }


    public function all()
    {

        return response([
            'data' => "hey error",
            'name' => "ruddra",
            'email' => "ruddra@gmail.com",
        ]);
    }

    public function show($userId)
    {
        $user = User::findOrFail($userId);

        return response([
            "user" => new UserShowResource($user),
        ]);
    }

    public function updateUserDetails(UpdateUserDetailsRequest $request)
    {
        $userId = auth()->user()->id;

        $data = $request->validated();

        User::where('id', $userId)->update([
            'name' => $data['name'],
            'username' => $data['username'],
            'bio' => $data['bio'],
        ]);
    }

    //GET
    public function information()
    {
        //Get User
        $user = auth()->user();
        //Get User Address
        $address = UserAddress::where('user_id', $user->id)->first()->address;
        //Get User Social Media Links
        $socialMediaLinks = UserSocialMedia::where('user_id', $user->id)->get();
        //Get User Skills
        $userSkills = UserSkills::where('user_id', $user->id)->get();

        // $skills = [];

        // foreach ($userSkills as $userSkill) {
        //     $skill = Skills::find($userSkill->skill_id);

        //     $skills[] = [
        //         'skill_name' => $skill->skill_name,
        //         'skill_type' => $skill->skill_type,
        //         'progress' => $userSkill->progress,
        //     ];
        // }


        return response([
            'user' => $user,
            'address' => $address,
            'social_media_link' =>  UserSocialMediaResource::collection($socialMediaLinks),
            'skills' => UserSkillIndexResource::collection($userSkills)
        ]);
    }

    //DELETE 
    public function destroy(string $id)
    {
        //
    }
}

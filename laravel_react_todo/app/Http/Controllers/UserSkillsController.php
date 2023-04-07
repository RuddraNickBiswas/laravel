<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserSkillsRequest;
use App\Http\Requests\UpdateUserSkillsRequest;
use App\Http\Resources\UserSkillIndexResource;
use App\Models\Skills;
use App\Models\UserSkills;

class UserSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->user()->id;


        $userSkills = UserSkills::where('user_id', $userId)->get();

        // $skillName = Skills::where('id', $userSkill['skill_id'] )->get();
        // $skills = [];

        // foreach ($userSkills as $userSkill) {
        //     $skill = Skills::find($userSkill->skill_id);

        //     $skills[] = [
        //         'id' => $userSkill->id,
        //         'skill_name' => $skill->skill_name,
        //         'skill_type' => $skill->skill_type,
        //         'progress' => $userSkill->progress,
        //     ];
        // }

        return UserSkillIndexResource::collection($userSkills);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserSkillsRequest $request)
    {
        $userId = auth()->user()->id;
        $data = $request->validated();
        $skillId = $data['skill_id'];
        $progress = $data['progress'];

        //Check if the skill exists

        $skill = Skills::find($skillId);

        if (!$skill) {
            return response()->json([
                'error' => 'Skill Is not Found'
            ]);
        }

        $userSkills = UserSkills::create([
            'user_id' => $userId,
            'skill_id' => $skillId,
            'progress' => $progress,
        ]);

        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     */
    public function show($userId)
    {
        $userSkills = UserSkills::where('user_id', $userId)->get();

        return UserSkillIndexResource::collection($userSkills);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserSkillsRequest $request, $id)
    {
        $userId = auth()->user()->id;

        $userSkill = UserSkills::where('user_id', $userId)->where('id', $id)->firstOrFail();
        $data = $request->validated();
        $userSkill->update([
            'skill_id' => $data['skill_id'],
            'progress' => $data['progress']
        ]);


        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $userId = auth()->user()->id;

        $userSkill = UserSkills::where('user_id', $userId)->where('id', $id)->firstOrFail();

        $userSkill->delete();
        return response([
            'message' => 'Social Media Link Deleted Successfully ',
        ]);
    }
}

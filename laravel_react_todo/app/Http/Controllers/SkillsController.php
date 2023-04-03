<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkillsRequest;
use App\Http\Requests\UpdateSkillsRequest;
use App\Models\Skills;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Skills $skills)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillsRequest $request, Skills $skills)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skills $skills)
    {
        //
    }
}

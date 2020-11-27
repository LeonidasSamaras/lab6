<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillsStoreRequest;
use App\Http\Requests\SkillsUpdateRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = Skill::all();

        return compact('skills');
    }

    public function store(SkillsStoreRequest $request)
    {
        $skill = Skill::create($request->only('title'));

        return response()->json(compact($skill), 201);
    }

    public function update(SkillsUpdateRequest $request, Skill $skill)
    {
        $skill->update($request->only('title'));

        return response()->json(null, 204);
    }

    public function destroy(Request $request, Skill $skill)
    {
        $skill->delete();

        return response()->json(null, 204);
    }
}

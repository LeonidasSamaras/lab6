<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersSkillsStoreRequest;
use App\Models\User;
use App\Models\Skill;
use Illuminate\Http\Request;

class UsersSkillsController extends Controller
{
    public function index($id)
    {
        $user = User::with('skills')->findOrFail($id);

        return response()->json([
            'skills' => $user->skills
        ]);
    }

    public function store(UsersSkillsStoreRequest $request, $id, Skill $skills)
    {
        $user = User::find($id);

        $user->skills()->attach($request->skills);

        return response()->json(compact('user'), 201);
    }
}

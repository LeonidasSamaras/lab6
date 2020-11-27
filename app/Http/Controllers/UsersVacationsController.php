<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersVacationsStoreRequest;
use App\Http\Requests\UsersVacationsUpdateRequest;
use App\Models\User;
use App\Models\Vacation;
use Illuminate\Http\Request;

class UsersVacationsController extends Controller
{
    public function index()
    {
    }

    public function show($id)
    {
        $vacations = User::find($id)->vacations;

        return response()->json($vacations, 200);
    }

    public function store(UsersVacationsStoreRequest $request, $id)
    {
        $vacation = new Vacation;

        $vacation->from = $request->from;
        $vacation->to = $request->to;

        $user = User::find($id);

        $user->vacations()->save($vacation);

        return response()->json($vacation, 201);
    }

    public function update(UsersVacationsUpdateRequest $request, $id)
    {
    }

    public function destroy()
    {
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends ResponseController
{
    public function index()
    {
        $response = [
            'data' => User::query()->get(),
        ];

        return $this->sendSuccess($response);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $user = User::query()->find($id);

        $response = [
            'user' => $user ?? []
        ];

        return $this->sendSuccess($response, 200);
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}

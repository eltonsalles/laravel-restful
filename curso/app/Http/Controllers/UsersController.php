<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        return User::all();
    }

    /**
     * @param Request $request
     *
     * @return $this|\Illuminate\Database\Eloquent\Model
     */
    public function store(Request $request)
    {
        return User::create($request->all());
    }

    /**
     * @param User $user
     *
     * @return User
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * @param Request $request
     * @param User    $user
     *
     * @return User
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return $user;
    }

    /**
     * @param User $user
     *
     * @return User
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();
        return $user;
    }
}

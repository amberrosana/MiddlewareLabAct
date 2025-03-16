<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAllUsers() {
        $users = User::orderBy('name')
        ->where('role' === 'user')
        ->get();

        return view('allUsers', ['users' => $users]);
    }
}

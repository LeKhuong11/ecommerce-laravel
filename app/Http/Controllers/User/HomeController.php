<?php

namespace App\Http\Controllers\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        $users = User::all();

        return view('user.index')
        ->with('users', $users);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $usersCollection = User::whereNot('role','admin')->paginate(20);
        return view('admin.user.index', compact('usersCollection'));
    }
}

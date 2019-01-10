<?php

namespace app\Http\Controllers;

use app\User;
use Illuminate\Http\Request;
use app\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
  public function user(){
    // $users['users'] = User::all();
    $users = User::paginate(15);
    return view('user', ['users' => $users]);
  }
}

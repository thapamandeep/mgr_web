<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Hero;

class SiteController extends Controller
{
  public function home(){

  $heroes = Hero::all();

  return view('pages.home',compact('heroes'));
  }

  public function register(){

  $roles = Role::all();

  return view('pages.register', compact('roles'));
  }

  public function login(){

  return view('pages.login');
  }

  public function admin(){

  return view('admin.home');
  }
}

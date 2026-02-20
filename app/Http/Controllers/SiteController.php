<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function home(){

  return view('pages.home');
  }

  public function register(){

  return view('pages.register');
  }

  public function login(){

  return view('pages.login');
  }
}

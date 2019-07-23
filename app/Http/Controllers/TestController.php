<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

  public function __construct()
  {
      $this->middleware('test');
  }

    public function showView()
    {
      return view('text');

    }
}

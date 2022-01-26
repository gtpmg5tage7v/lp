<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Member;
class MemberController extends Controller
{
    public function create()
  {
    return view('member/create');
  }

  
  public function create2()
  {
    return view('member/create2');
  }

  public function create3()
  {
    return view('member/create3');
  }




}

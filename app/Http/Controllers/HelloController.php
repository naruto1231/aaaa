<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class HelloController extends Controller
{
  public function index(Request $request){

  $itmes = DB::select('select * from peoole')
  return view('hello.index',['items]' => $items]);
  }
}

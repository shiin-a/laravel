<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Hamster;

class HelloController extends Controller
{
  public function index(){
    $items = DB::table('hamsters')->simplePaginate(2);

    return view('index', ['items' => $items]);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hamster;

class HelloController extends Controller
{
  public function index(){
    $items = Hamster::all();
    var_dump($items);
    return "";
  }
}

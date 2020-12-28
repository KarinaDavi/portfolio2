<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function index (){
    $projects = Project::all();
    return view('portfolio', ['projects' => $projects]); 
   } 
}

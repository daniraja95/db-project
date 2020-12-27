<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\activiti;
class activityController extends Controller
{
     function showactivitylist(){

$act = \App\Models\activiti::all();
// return $products;
return view('index',['activ'=>$act]);

}
}

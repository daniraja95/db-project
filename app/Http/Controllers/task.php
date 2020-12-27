<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_task;

class task extends Controller
{
    //
    function save(Request $req){
    	//print_r($req->input());

    	 $user = new M_task;
    	 $user->p_task= $req->p_task;
    	 $user->save();
    	 return redirect('index');

    }

     function index(){

$tasks = \App\Models\M_task::all();
// return $products;
return view('index',['prod'=>$tasks]);

}

// public function deletetask($id){

// $products = \App\Models\M_task::find($id);

// $products->delete();
// return response()->json(['success'=>'Record has been deleted']);

// }

function delete($id){

$data = M_task::find($id);
$data->delete();
return redirect('index');

}
}

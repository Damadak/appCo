<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Active;

class ActiveController extends Controller
{

  public function index(){

    $actives= Active ::all();
    return response($actives->toJson(), 200, array('Content-Type' => 'application/json'));

  }


  public function show($id){

    $active=Active::find($id);
    return response($active->toJson(), 200, array('Content-Type' =>'application/json'));

  }


  public function store(Request $request){

    $active = new Active;
    $active->product = $request->product;
    $active->quantity = $request->quantity;
    $active->save();
    return response()->json("youhou");

  }

  public function delete($id){

    $active=Active::find($id);
    $active->delete();
    return response()->json("youhou");

  }

/*



  public function update(Request $request, Active $active){

    $active->update($request->all());
    return response()->json($active,200)

  }


  */

}

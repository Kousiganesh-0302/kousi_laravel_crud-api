<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestController extends Controller
{
    public function store(Request $request){

$data = $request->validate([
    'title'=> 'required|string|max:255',
    'priority'=>'nullable|integermin:1|max:3',
    'flag'=> 'boolean',
]);

$todo = Todo::create($data);
//return json, NOT view
return response()->json([
       'status'=>true,
       'message'=>'Todo created.',
       'data'=> $todo,
      ]);//add status
}
}

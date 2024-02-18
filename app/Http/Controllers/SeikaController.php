<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SeikaRequest;
use App\Models\Fishes;

class SeikaController extends Controller
{
  public function index(Fishes $fish)
{
    return view('sakana/index')->with(['fishes' => $fish->getByLimit()]);
}

  // public function index(Fishes $fish)
  // {
  //   return view('sakana/index')->with(['fishes'=>$fish->getPaginateByLimit()]);
      
  // }
  
  public function show(Fishes $fish)
  {
    return view('sakana/show')->with(['fish'=>$fish]);
  }
  
  public function create()
  {
    return view('sakana/create');
  }
  
  public function store(SeikaRequest $request,Fishes $fish)
  {
     $input = $request['fish'];
    if(isset($input['image']))
    {
    $dir = '/';
    $file = $input['image'];
    $file_name = $file->getClientOriginalName();
    $input['image'] = $file_name;
    $file->storeAs('public' . $dir,$file_name);
    }
    $fish->fill($input)->save();
  
    return redirect('/fishes/'. $fish->id);
  }
    
  public function edit(Fishes $fish)
  {
    return view('sakana.edit')->with(['fish' => $fish]);
  }
  
  public function update(Request $request, Fishes $fish)
  {
    $input_fish = $request['fish'];
    $fish->fill($input_fish)->save();

    return redirect('/fishes/' . $fish->id);
  }
  
  public function delete(Fishes $fish)
  {
    $fish->delete();
    return redirect('/');
  }
}
<?php

namespace App\Http\Controllers;

use App\dog;
use Illuminate\Http\Request;

class DogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dogs = Dog::all();
        return view('master', ['dogs'=>$dogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $dog = new Dog();
        $dog->name = request('name');
        $dog->breed = request('breed');
        $dog->age = request('age');
        $dog->height = request('height');
        $dog->fur = request('fur');
        $dog->date = request('date');
        $dog->description = request('desc');
        $dog->vaccinated = request('radiobutton');
        $dog->cats = request('radiobutton2');
        $dog->dogs = request('radiobutton3');
        $dog->castrated = request('radiobutton4');
        $dog->commands = request('radiobutton5');
            if($request->hasFile('pic')){
                $file = $request ->file('pic');
                $fileName = $file->getClientOriginalName();
                $file->move('img/dogs/',$fileName);
                $dog->image = $fileName;
        }else{
            
            return $request;
            

        }

        $dog->save();

        return redirect("add");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function show(dog $dog)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function edit(dog $dog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dog $dog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dog  $dog
     * @return \Illuminate\Http\Response
     */
    public function destroy(dog $dog)
    {
        //
    }
}

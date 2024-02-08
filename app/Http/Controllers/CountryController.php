<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use Session;
use Carbon\Carbon;

class CountryController extends Controller{
    public function __construct(){

    }

    public function create(){
        return view('country.create');
    }

    public function store(Request $request){

        
        $insert = Country::insert([
            'name' => $request['name'],
            'capital' => $request['capital'],
            'currency' => $request['currency'],
            'population' => $request['population'],
            'updated_at' => Carbon::now('asia/dhaka')->toDateTimeString(),
            'created_at' => Carbon::now('asia/dhaka')->toDateTimeString(),
        ]);

        if($insert){
            return redirect('countries');
        }    
    }

    public function show(){
        $data = Country::all();
        return view('country.show',compact('data'));
    }

    public function edit($id){  //EIta Hocche Route Model Blinding Method 
        $data = Country::find($id);
        return view('country.edit',compact('data'));
    }

    public function update($id){
        
        $data = Country::find($id);

        $name = request('name');
        $capital = request('capital');
        $currency = request('currency');
        $population = request('population');

        $data->name = $name;
        $data->capital = $capital;
        $data->currency = $currency;
        $data->population = $population;

        $data->update();
        
        
    }  

    public function detail($id){
        $data = Country::find($id);
        return view('country.details',compact('data'));
    }



}

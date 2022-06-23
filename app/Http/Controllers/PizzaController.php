<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'asc    ')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        // $pizzas = Pizza::latest()->take(2)->get();
        return view('pizzas.index', ['pizzas'=>$pizzas]);
    }

    public function show($id){
        $pizza = Pizza::where('id', $id)->take(1)->first();
        return view('pizzas.show', ['pizza'=>$pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

}

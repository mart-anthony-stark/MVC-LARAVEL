<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * GET all resource
     */
    public function index(){
        $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name', 'asc    ')->get();
        // $pizzas = Pizza::where('type', 'hawaiian')->get();
        // $pizzas = Pizza::latest()->take(2)->get();
        return view('pizzas.index', ['pizzas'=>$pizzas]);
    }

    /**
     * GET one resource
     */
    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza'=>$pizza]);
    }

    /**
     * GET (create form) view
     */
    public function create(){
        return view('pizzas.create');
    }

    /**
     * POST (create) resource
     */
    public function store(){
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/pizzas')->with('msg', 'Order placed successfully!');
    }

    /**
     * DELETE single resource
     */
    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas')->with('msg','Order deleted');
    }
}

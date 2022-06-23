@extends('layouts.layout')

@section('content')
    <div class="flex justify-center items-center flex-column">

        <h1>CREATE NEW PIZZA</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your name:</label>
            <input type="text" id="name" name="name">
            <label for="type">Choose your pizza type:</label>
            <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg Supreme</option>
                <option value="volcano">volcano</option>
            </select>
            <label for="base">Choose your base type:</label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin and crispy">Thin and crispy</option>
                <option value="thick">Thick</option>
            </select>
            <input type="submit" value="Order Pizza">
        </form>
    </div>
@endsection

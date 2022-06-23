@extends('layouts.layout')

@section('content')
    <a href="/pizzas">Back to all pizzas</a>
    <h1>{{ $pizza->name }}</h1>
    <p class="type">{{ $pizza->type }}</p>
    <p class="base">{{ $pizza->base }}</p>
    <p class="price">{{ $pizza->price }}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
        @foreach ($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Complete Order">
    </form>
@endsection

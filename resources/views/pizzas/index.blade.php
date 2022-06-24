@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center flex-column">
        @if (session('msg'))
            <p class="msg">{{ session('msg') }}</p>
        @endif

        <h1>Pizzas</h1>
        <a href="/pizzas/create">ADD NEW PIZZA</a>
        @foreach ($pizzas as $pizza)
            <a href="/pizzas/{{ $pizza->id }}">
                <h3> {{ $pizza->type }} - {{ $pizza->base }} - {{ $pizza->name }} - Php {{ $pizza->price }}</h3>
            </a>
        @endforeach
    </div>
@endsection

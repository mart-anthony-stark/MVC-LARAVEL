@extends('layouts.layout')

@section('content')
    <div class="flex justify-center items-center flex-column">

        <h1>Pizzas</h1>
        @foreach ($pizzas as $pizza)
            <h3> {{ $pizza->type }} - {{ $pizza->base }} - {{ $pizza->name }} - Php {{ $pizza->price }}</h3>
        @endforeach
    </div>
@endsection

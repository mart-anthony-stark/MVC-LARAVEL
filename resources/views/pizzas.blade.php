@extends('layouts.layout')

@section('content')
    <div class="flex justify-center items-center flex-column">

        <h1>Pizzas</h1>
        @if ($name)
            <h2>Name: {{ $name }}</h2>
        @endif
        @if ($age)
            <h2>Age: {{ $age }}</h2>
        @endif
        @foreach ($pizzas as $pizza)
            <h3>{{ $loop->index + 1 }} {{ $pizza['type'] }} - {{ $pizza['base'] }}</h3>
        @endforeach
    </div>
@endsection

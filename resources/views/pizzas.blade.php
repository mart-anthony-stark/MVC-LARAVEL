@extends('layouts.layout')

@section('content')
    <h1>Pizzas</h1>
    @foreach ($pizzas as $pizza)
        <h3>{{ $pizza }}</h3>
    @endforeach
@endsection

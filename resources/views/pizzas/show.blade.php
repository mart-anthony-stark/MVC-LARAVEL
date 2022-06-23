@extends('layouts.layout')

@section('content')
    <a href="/pizzas">Back to all pizzas</a>
    <h1>{{ $pizza->name }}</h1>
    <p class="type">{{ $pizza->type }}</p>
    <p class="base">{{ $pizza->base }}</p>
    <p class="price">{{ $pizza->price }}</p>
@endsection

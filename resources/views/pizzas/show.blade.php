@extends('layouts.layout')

@section('content')
    <h1>{{ $pizza->name }}</h1>
    <p class="type">{{ $pizza->type }}</p>
    <p class="base">{{ $pizza->base }}</p>
    <p class="price">{{ $pizza->price }}</p>
@endsection

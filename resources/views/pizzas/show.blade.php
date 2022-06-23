@extends('layouts.layout')

@section('content')
    {{ $pizza->type }}
    {{ $pizza->name }}
    {{ $pizza->base }}
    {{ $pizza->price }}
@endsection

@extends('layouts.master')

@section('content')
    <h1>gameweeks</h1>

    @foreach ($gameweeks as $gameweek)
        {{ $gameweek }}
    @endforeach

@endsection
@extends('layouts.master')

@section('content')

<h1> {{ $person->name}}</h1>
<h2> {{ $person->fav_color }}</h2>
<h3> {{ $person->other}}</h3>


@endsection


@extends('layouts.master')

@section('content')


    @foreach ($player_list as $players)
    
        <a href="player/{{ $players->slug }}"><p>{{ $players->first_name}} {{ $players->second_name}} {{ $players->team->team_short_name }}</p></a>
    
    @endforeach



@endsection
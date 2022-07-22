@extends('layouts.master')

@section('content')
    @foreach ($teams as $team)

        <p>{{ $team->team_name }}</p>

        @foreach ($team->players as $player)
                
            <a href="player/{{ $player->slug }}"><p class="{{ $player->team->team_short_name }}">{{ $player->first_name }} {{ $player->second_name }}</p></a>

        @endforeach

    @endforeach
@endsection

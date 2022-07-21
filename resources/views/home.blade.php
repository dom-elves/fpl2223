@extends('layouts.master')

@section('content')
    @foreach ($teams as $team)

        <p class="text-3xl">{{ $team->team_name }}</p>

        @foreach ($team->players as $player)

            <a href="player/{{ $player->slug }}"><p>{{ $player->first_name }} {{ $player->second_name }}</p></a>

        @endforeach

    @endforeach
@endsection

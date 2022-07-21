@extends('layouts.master')

@section('content')
    @foreach ($teams as $team)

        <p>{{ $team->team_name }}</p>

        @foreach ($team->players as $player)
                
            <a href="player/{{ $player->slug }}"><p class="bg-[{{$team->hex_primary}}] text-[{{$team->hex_secondary}}]">{{ $player->first_name }} {{ $player->second_name }}</p></a>

        @endforeach

    @endforeach
@endsection

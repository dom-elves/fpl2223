@extends('layouts.master')

@section('content')
    @foreach ($teams as $team)

        <p>{{ $team->team_name }}</p>

        @foreach ($team->players as $player)

            <p>{{ $player->first_name }} {{ $player->second_name }}</p>

        @endforeach

    @endforeach
@endsection

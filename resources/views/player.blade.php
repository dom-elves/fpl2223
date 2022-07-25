@extends('layouts.master')

@section('content')



<p class="m-4">{{ $player->first_name }} {{ $player->second_name }}</p>

<div class="flex flex-row">
    <p class="m-4">{{ $player->team->team_name }}</p>
    <p class="m-4">Selected: {{ $player->current_popularity }}%</p>
    <p class="m-4">Current cost: {{ $player->current_cost }}</p>
</div>

<div class="flex flex-row">
    <p class="m-4">Total points: {{ $player->total_points_season }}</p>
    <p class="m-4">This week: {{ $player->total_points_week }}</p>
    <p class="m-4">Points per game: {{ $player->points_per_game }}</p>
</div>


@endsection
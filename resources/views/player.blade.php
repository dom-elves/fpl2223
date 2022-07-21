@extends('layouts.master')

@section('content')



<p class="bg-[{{ $player->team->hex_primary }}] text-[{{ $player->team->hex_secondary}}]"> {{$player}}</p>


@endsection
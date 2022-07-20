@foreach ($players as $player)
    <p>{{ $player->first_name }} {{ $player->second_name }}</p>
    <p>{{ $player->team->team_name }}</p>

@endforeach


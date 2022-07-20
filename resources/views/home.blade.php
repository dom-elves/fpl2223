

@foreach ($teams as $team)

    <p>{{ $team->team_name }}</p>

    @foreach ($team->players as $player)

        <p>{{ $player->first_name }} {{ $player->last_name }}</p>

    @endforeach

@endforeach


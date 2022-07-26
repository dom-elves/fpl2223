<html>

<head>
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body>

    <header>
        <h1>fpl 22/23</h1>

        <form action="/player-search">

            <label for="player-search"></label>
            <input placeholder="Search for a player" name="player-search">

        <form>

    </header>

    @yield('content')

@livewireScripts
</body>




</html>
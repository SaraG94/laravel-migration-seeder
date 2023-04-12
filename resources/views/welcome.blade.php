<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel-migration-seeder</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">

        <div class="container p-5">
            <div class="row">
                @forelse ($trains as $train)
                    <div class="col-3">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">{{$train->azienda}}</li>
                                <li class="list-group-item">Codice Treno: {{$train->codice_treno}}</li>
                                <li class="list-group-item">Da: {{$train->stazione_di_partenza}}</li>
                                <li class="list-group-item">A: {{$train->stazione_di_arrivo}}</li>
                                <li class="list-group-item">Partenza: {{$train->orario_di_partenza}}</li>
                                <li class="list-group-item">Arrivo: {{$train->orario_di_arrivo}}</li>
                                <li class="list-group-item">Ritardo di {{$train->in_orario}} minuti</li>
                            </ul>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </main>

</body>

</html>
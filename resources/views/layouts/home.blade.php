@extends('layouts.app')

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
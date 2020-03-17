@extends('layouts.layout')

@section('main')

@foreach (config("studenti.studenti") as $key => $studente)
<div class="box-studenti">
    <img src="{{$studente["img"]}}" alt="{{$studente["nome"]}}">
    <a href="{{route("studente.show", ["id" => $key])}}">
        <h2>{{$studente["nome"]}} ( {{$studente["eta"]}} anni)</h2>
    </a>
    <h3>Assunt{{($studente["genere"] == "m") ? "o" : "a"}} da {{$studente["azienda"]}} come {{$studente["ruolo"]}}</h3>
    <p>{{$studente["descrizione"]}}</p>
</div>
@endforeach

@endsection

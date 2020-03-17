@extends('layouts.layout')

@section('main')

<div class="dopo-corso__container">
  <div class="wrapper">
    <h1>I nostri ex studenti su LinkedIn</h1>
    <div class="wrapper_studenti">
      @foreach (config("studenti.studenti") as $key => $studente)
      <div class="box">
        <div class="top">
          <div class="left">
            <img src="{{$studente["img"]}}" alt="{{$studente["nome"]}}">
          </div>
          <div class="right">
            <a href="{{route("studente.show", ["id" => $key])}}">
                <h2>{{$studente["nome"]}} ( {{$studente["eta"]}} anni)</h2>
            </a>
            <h3>Assunt{{($studente["genere"] == "m") ? "o" : "a"}} da {{$studente["azienda"]}} come {{$studente["ruolo"]}}</h3>
          </div>
        </div>
        <div class="bottom">
          <p>{{$studente["descrizione"]}}</p>
        </div>



      </div>
      @endforeach
    </div>
  </div>
</div>



@endsection

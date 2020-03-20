@extends('layouts.layout')

@section('main')



<div class="dopo-corso__container">
    <div class="wrapper">
        <h1>prova connessione database</h1>

        {{-- <div class="filter">
            <select name="filter" id="filter">
              <option value="">Filtra per anni</option>
                <option value="25">da 0 a 25</option>
                <option value="50">da 26 a 50</option>
            </select>
        </div> --}}
        <div class="wrapper_studenti">
          @foreach ($studenti as $student)
            @dd($student);
          @endforeach



            {{-- @foreach (config("studenti.studenti") as $key => $studente)
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
            @endforeach --}}
        </div>
    </div>
</div>



@endsection

@extends('layouts.app')

@section('content')

<h1 class="text-center mb-5">Movies Page</h1>

{{-- inserire ciclo dei dati dei films --}}

<div class="row">

    @foreach ($movies as $movie)
    <div class="col-4 text-center mb-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h4 class="card-title">{{$movie->title}}</h4>
              <h5 class="card-title">{{$movie->original_title}}</h5>
              <h6 class="card-title">Votation: {{$movie->vote}}</h6>
              <p class="card-text">Nationality: {{$movie->nationality}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>


@endsection
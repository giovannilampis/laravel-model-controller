@extends('layouts.app')

@section('content')

<h1 class="text-center">Movies Page</h1>

{{-- inserire ciclo dei dati dei films --}}

<div class="row">

    <div class="col-4">

        @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <img src="{{$movie->image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        @endforeach

    </div>

</div>


@endsection
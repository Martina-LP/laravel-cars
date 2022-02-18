@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <div class="card">
                <img src="{{ $car->src }}" alt="{{ $car->brand }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $car->brand }}</h5>
                  <p class="card-text">Modello: {{ $car->model }}</p>
                  <p class="card-text">CC: {{ $car->cc }}</p>
                  <p class="card-text">Prezzo: {{ $car->price }}</p>
                  <p class="card-text">{!! $car->description !!}</p>
                  <div><a class="btn btn-primary" href="{{ route('cars.edit', ['car' => $car->id]) }}">Modifica</a></div>
                  <div>
                      <form action="{{ route('cars.destroy', ['car' => $car->id]) }}" method="post">
                          @csrf
                          @method('DELETE')

                          <button class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare?')">Cancella</button>
                      </form>
                  </div>
                </div>
            </div>
        </div>
    </section>
@endsection
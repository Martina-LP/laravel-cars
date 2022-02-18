@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h1>Lista dei nostri prodotti</h1>

            <div class="list-group">
                @foreach ($cars as $car)
                    <a href="{{ route('cars.show', ['car' => $car->id]) }}" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $car->brand }}</h5>
                        {{-- <small>3 days ago</small> --}}
                    </div>
                    <p class="mb-1">Modello di auto: {{ $car->model }}</p>
                    {{-- <small>And some small print.</small> --}}
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
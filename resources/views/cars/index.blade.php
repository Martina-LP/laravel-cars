@extends('layouts.app')

@section('main_content')
    <h1 class="text-center">Full List of all Cars</h1>

    <div class="container">
        <div class="list-group">

            @foreach($cars as $car)

                <a href="{{ route('cars.show', ['car' => $car->id]) }}" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $car->brand }}</h5>
                    {{-- <small>3 days ago</small> --}}
                </div>
                <p class="mb-1"><strong>Description: </strong>{{ $car->description }}</p>
                {{-- <small>And some small print.</small> --}}
                </a>

            @endforeach

        </div>
    </div>

@endsection

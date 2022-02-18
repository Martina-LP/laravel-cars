@extends('layouts.app')

@section('main_content')

    <section>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="card" style="width: 22rem;">
                    <img src="{{ $car->src }}" class="card-img-top" alt="{{ $car->brand }}">
                    <div class="card-body">
                        <h4 class="card-title">{{ $car->brand }}</h4>
                        <p class="card-text"><strong>Model: </strong>{{ $car->model }}</p>
                        <p class="card-text"><strong>CC: </strong>{{ $car->cc }}</p>
                        <p class="card-text"><strong>Price: </strong>{{ $car->price }}</p>
                        <p class="card-text"><strong>Description: </strong>{{ $car->description }}</p>
                        <a href="#" class="btn btn-primary">Read details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

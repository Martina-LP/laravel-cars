@extends('layouts.app')

@section('page_title')
    Listino Luxury Cars
@endsection

@section('main_content')
<div class="main-content">
    <div class="container">
        <div class="cars">
            @foreach ($cars as $car)
            {{-- Single Comic --}}
            <div class="single-car">
                <a href="{{  route('cars.show', ['car' => $car->id]) }}">
                    <div class="car-src">
                        <img src="{{$car->src}}" alt="{{$car->brand}}">
                    </div>
                    <div class="car-brand">
                        {{$car->brand}}
                    </div>
                </a>    
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
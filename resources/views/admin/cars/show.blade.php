@extends('layouts.app')

@section('page_title')
    Comic
@endsection

@section('main_content')
    <div class="selected-car">
        <div class="container">
            <div class="product">
                <div class="src">
                    <img src="{{$car->src}}" alt="">
                </div>
                <div class="title">
                    {{$car->brand}}
                </div>
                <div class="series">
                    {{$car->model}}
                </div>
                <div>
                    Categoria: {{$car->category ? $car->category->name : 'nessuna'}}
                </div>
                <div class="type">
                    {{$car->cc}}
                </div>
                <div class="price">
                    {{$car['price']}} $
                </div>
                <div class="optional">
                    Optionals:
                    @forelse ($car->optionals as $optional)
                    {{ $optional->name }}{{ !$loop->last ? ',' : '' }}
                    @empty
                        nessuno
                    @endforelse

                </div>
                <div class="description">
                    {{$car['description']}}
                </div>
            </div>
            <div class="button">
                <a href="{{ route('admin.cars.edit', ['car' => $car['id']])}}">
                    Modifica la macchina
                </a>
                <form action="{{ route('admin.cars.destroy', ['car' => $car['id']])}}" method=post>
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Elimina la macchina" onclick="return confirm('Sei sicuro di voler cancellare?')"></input>
                </form>
            </div>
        </div>
    </div>
@endsection

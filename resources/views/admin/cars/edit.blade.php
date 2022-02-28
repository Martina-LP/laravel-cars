@extends('layouts.app')

@section('page_title')
    Modifica le caratteristiche della tua macchina
@endsection

@section('main_content')
    <div class="edit-car">
        <div class="container">

            <div class="title">
                Aggiorna i dati della tua macchina
            </div>

            <div class="validation">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <form action="{{ route('admin.cars.update', ['car' => $car->id]) }}" method="post">

                @csrf
                @method('PUT')

                <input type="text" name="brand" placeholder="Brand dell'auto?" value="{{ old('brand') ? old('brand') : $car->brand }}"">

                <input type="text" name="src" placeholder="Inserisci la copertina della macchina" value="{{ old('src') ? old('src') : $car->src }}">

                <input type="text" name="price" placeholder="Quanto vuoi far pagare la tua macchina?" value="{{ old('price') ? old('price') : $car->price }}">

                <input type="text" name="model" placeholder="Che modello è?" value="{{ old('model') ? old('model') : $car->model }}">

                <input type="text" name="cc" placeholder="Che cilindrata ha?" value="{{ old('cc') ? old('cc') : $car->cc }}">

                <textarea name="description" id="" cols="30" rows="10" placeholder="Forniscici una descrizione della macchina">{{ old('description') ? old('description') : $car->description }}"</textarea>

                <input type="submit">
            </form>

        </div>
    </div>
@endsection
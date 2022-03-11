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

            <form action="{{ route('admin.cars.update', ['car' => $car->id]) }}" method="post" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <input type="text" name="brand" placeholder="Brand dell'auto?" value="{{ old('brand') ? old('brand') : $car->brand }}">

                <label for="src">Carica Immagine</label>
                <input type="file" name="src" id="src">
                @if($car->src)
                    <div>
                        <img class="w-50" src="{{asset($car->src)}}" alt="{{$car->model}}">
                    </div>
                @endif

                <input type="text" name="price" placeholder="Quanto vuoi far pagare la tua macchina?" value="{{ old('price') ? old('price') : $car->price }}">

                <input type="text" name="model" placeholder="Che modello è?" value="{{ old('model') ? old('model') : $car->model }}">

                <label for="category_id">Categoria</label>

                <select name="category_id" id="category_id">

                    <option value="">Nessuna</option>

                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $car->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>

                    @endforeach

                </select>

                <input type="text" name="cc" placeholder="Che cilindrata ha?" value="{{ old('cc') ? old('cc') : $car->cc }}">

                <div class="optionals">
                    Optionals
                </div>

                <div>
                    @foreach ($optionals as $optional)

                        <label for="optional-{{ $optional->id }}">
                            {{ $optional->name }}
                        </label>

                        @if ($errors->any())
                                <input {{ in_array($optional->id, old('optionals', [])) ? 'checked' : '' }} type="checkbox" value="{{ $optional->id }}" id="optionals-{{ $optional->id }}" name="optionals[]">
                                <label for="optional-{{ $optional->id }}">
                                    {{ $optional->name }}
                                </label>
                            @else
                                <input {{ $car->optionals->contains($optional) ? 'checked' : '' }} type="checkbox" value="{{ $optional->id }}" id="optionals-{{ $optional->id }}" name="optionals[]">
                                <label for="optional-{{ $optional->id }}">
                                    {{ $optional->name }}
                                </label>
                        @endif

                    @endforeach
                </div>

                <textarea name="description" id="" cols="30" rows="10" placeholder="Forniscici una descrizione della macchina">{{ old('description') ? old('description') : $car->description }}"</textarea>

                <input type="submit">
            </form>

        </div>
    </div>
@endsection

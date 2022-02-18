@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <h2>Crea un nuovo tipo di auto</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('cars.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="mb-3">
                  <label for="brand" class="form-label">Brand</label>
                  <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand') }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                </div>

                <div class="mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" class="form-control" id="model" name="model" value="{{ old('model') }}">
                </div>

                <div class="mb-3">
                    <label for="cc" class="form-label">cc</label>
                    <input type="text" class="form-control" id="cc" name="cc" value="{{ old('cc') }}">
                </div>

                <div class="mb-3">
                    <label for="src" class="form-label">Src</label>
                    <input type="text" class="form-control" id="src" name="src" value="{{ old('src') }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
@extends('layouts.app')

@section('main_content')
    <section>
        <div class="container">
            <form action="{{ route('cars.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="mb-3">
                <label for="brand" class="form-label">Brand:</label>
                <input type="text" class="form-control" id="brand" name="brand">
                </div>
                <div class="mb-3">
                    <label for="model" class="form-label">Model:</label>
                    <input type="text" class="form-control" id="model" name="model">
                </div>
                <div class="mb-3">
                    <label for="cc" class="form-label">CC:</label>
                    <input type="text" class="form-control" id="cc" name="cc">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description:</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="mb-3">
                    <label for="src" class="form-label">Image (url):</label>
                    <input type="text" class="form-control" id="src" name="src">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection

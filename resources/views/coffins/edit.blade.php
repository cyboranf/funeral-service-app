@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edytuj trumnę</h1>
                <form action="{{ route('coffins.update', $coffin) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="material">Materiał:</label>
                        <input type="text" name="material" id="material" class="form-control" value="{{ old('material', $coffin->material) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="color">Kolor:</label>
                        <input type="text" name="color" id="color" class="form-control" value="{{ old('color', $coffin->color) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="size">Rozmiar:</label>
                        <input type="text" name="size" id="size" class="form-control" value="{{ old('size', $coffin->size) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="priceOfCoffins">Cena:</label>
                        <input type="text" name="priceOfCoffins" id="priceOfCoffins" class="form-control" value="{{ old('priceOfCoffins', $coffin->priceOfCoffins) }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Zaktualizuj</button>
                    <a href="{{ route('coffins.index') }}" class="btn btn-secondary">Anuluj</a>
                </form>
            </div>
        </div>
    </div>
@endsection

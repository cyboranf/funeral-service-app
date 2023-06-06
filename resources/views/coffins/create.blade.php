@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dodaj trumnę</h1>
                <form action="{{ route('coffins.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="material">Materiał:</label>
                        <input type="text" name="material" id="material" class="form-control" value="{{ old('material') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="color">Kolor:</label>
                        <input type="text" name="color" id="color" class="form-control" value="{{ old('color') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="size">Rozmiar:</label>
                        <input type="text" name="size" id="size" class="form-control" value="{{ old('size') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="priceOfCoffins">Cena:</label>
                        <input type="text" name="priceOfCoffins" id="priceOfCoffins" class="form-control" value="{{ old('priceOfCoffins') }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Dodaj</button>
                    <a href="{{ route('coffins.index') }}" class="btn btn-secondary">Anuluj</a>
                </form>
            </div>
        </div>
    </div>
@endsection

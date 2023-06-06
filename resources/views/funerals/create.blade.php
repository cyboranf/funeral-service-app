@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dodaj Pogrzeb</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('funerals.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="deceased_name">Imię i nazwisko zmarłego:</label>
                        <input type="text" name="deceased_name" id="deceased_name" class="form-control" value="{{ old('deceased_name') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="deceased_age">Wiek zmarłego:</label>
                        <input type="number" name="deceased_age" id="deceased_age" class="form-control" value="{{ old('deceased_age') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="user_id">ID użytkownika:</label>
                        <input type="number" name="user_id" id="user_id" class="form-control" value="{{ old('user_id') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="coffin_id">ID trumny:</label>
                        <input type="number" name="coffin_id" id="coffin_id" class="form-control" value="{{ old('coffin_id') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="church_id">ID kościoła:</label>
                        <input type="number" name="church_id" id="church_id" class="form-control" value="{{ old('church_id') }}">
                    </div>

                    <div class="form-group">
                        <label for="priest_id">ID księdza:</label>
                        <input type="number" name="priest_id" id="priest_id" class="form-control" value="{{ old('priest_id') }}">
                    </div>

                    <div class="form-group">
                        <label for="price">Cena:</label>
                        <input type="number" name="price" id="price" class="form-control" value="{{ old('price') }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Dodaj</button>
                    <a href="{{ route('funerals.index') }}" class="btn btn-secondary">Anuluj</a>
                </form>
            </div>
        </div>
    </div>
@endsection

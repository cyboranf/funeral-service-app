@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dodaj nowego księdza</h1>
                <form action="{{ route('priests.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Imię:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="surname">Nazwisko:</label>
                        <input type="text" name="surname" id="surname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="religion">Religia:</label>
                        <input type="text" name="religion" id="religion" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Dodaj</button>
                    <a href="{{ route('priests.index') }}" class="btn btn-secondary">Anuluj</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edytuj księdza</h1>
                <form action="{{ route('priests.update', $priest) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Imię:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $priest->name) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="surname">Nazwisko:</label>
                        <input type="text" name="surname" id="surname" class="form-control" value="{{ old('surname', $priest->surname) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="religion">Religia:</label>
                        <input type="text" name="religion" id="religion" class="form-control" value="{{ old('religion', $priest->religion) }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Zaktualizuj</button>
                    <a href="{{ route('priests.index') }}" class="btn btn-secondary">Anuluj</a>
                </form>
            </div>
        </div>
    </div>
@endsection

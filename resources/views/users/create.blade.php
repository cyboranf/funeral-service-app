@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dodaj nowego użytkownika</h1>
                <form action="{{ route('users.store') }}" method="POST">
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
                        <label for="birthday">Data urodzenia:</label>
                        <input type="date" name="birthday" id="birthday" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="city">Miasto:</label>
                        <input type="text" name="city" id="city" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="role_id">Rola:</label>
                        <select name="role_id" id="role_id" class="form-control" required>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Dodaj</button>
                    <a href="{{ route('users.index') }}" class="btn btn-secondary">Anuluj</a>
                </form>
            </div>
        </div>
    </div>
@endsection

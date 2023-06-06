@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Szczegóły użytkownika</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Imię:</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>Nazwisko:</th>
                            <td>{{ $user->surname }}</td>
                        </tr>
                        <tr>
                            <th>Data urodzenia:</th>
                            <td>{{ $user->birthday->format('Y-m-d') }}</td>
                        </tr>
                        <tr>
                            <th>Miasto:</th>
                            <td>{{ $user->city }}</td>
                        </tr>
                        <tr>
                            <th>Rola:</th>
                            <td>{{ $user->role->name }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Edytuj</a>
                <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Usuń</button>
                </form>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Powrót</a>
            </div>
        </div>
    </div>
@endsection

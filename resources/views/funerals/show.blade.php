@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Informacje o Pogrzebie</h1>

                <table class="table">
                    <tr>
                        <th>ID:</th>
                        <td>{{ $funeral->id }}</td>
                    </tr>
                    <tr>
                        <th>Zmarły:</th>
                        <td>{{ $funeral->deceased_name }}</td>
                    </tr>
                    <tr>
                        <th>Wiek:</th>
                        <td>{{ $funeral->deceased_age }}</td>
                    </tr>
                    <tr>
                        <th>Użytkownik:</th>
                        <td>{{ $funeral->user->name }}</td>
                    </tr>
                    <tr>
                        <th>Trumna:</th>
                        <td>{{ $funeral->coffin->material }}</td>
                    </tr>
                    <tr>
                        <th>Kościół:</th>
                        <td>{{ $funeral->church->name ?? 'Brak' }}</td>
                    </tr>
                    <tr>
                        <th>Ksiądz:</th>
                        <td>{{ $funeral->priest->name ?? 'Brak' }}</td>
                    </tr>
                    <tr>
                        <th>Cena:</th>
                        <td>{{ $funeral->price }}</td>
                    </tr>
                </table>

                <a href="{{ route('funerals.index') }}" class="btn btn-secondary">Powrót</a>
            </div>
        </div>
    </div>
@endsection

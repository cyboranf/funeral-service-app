@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Ksiądz: {{ $priest->name }} {{ $priest->surname }}</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th>Imię:</th>
                            <td>{{ $priest->name }}</td>
                        </tr>
                        <tr>
                            <th>Nazwisko:</th>
                            <td>{{ $priest->surname }}</td>
                        </tr>
                        <tr>
                            <th>Religia:</th>
                            <td>{{ $priest->religion }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('priests.edit', $priest) }}" class="btn btn-primary">Edytuj</a>
                <a href="{{ route('priests.index') }}" class="btn btn-secondary">Powrót do listy</a>
            </div>
        </div>
    </div>
@endsection

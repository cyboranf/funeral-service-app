@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Trumna</h1>
                <table class="table mt-3">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <td>{{ $coffin->id }}</td>
                        </tr>
                        <tr>
                            <th>Materiał</th>
                            <td>{{ $coffin->material }}</td>
                        </tr>
                        <tr>
                            <th>Kolor</th>
                            <td>{{ $coffin->color }}</td>
                        </tr>
                        <tr>
                            <th>Rozmiar</th>
                            <td>{{ $coffin->size }}</td>
                        </tr>
                        <tr>
                            <th>Cena</th>
                            <td>{{ $coffin->priceOfCoffins }}</td>
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('coffins.index') }}" class="btn btn-secondary">Powrót</a>
            </div>
        </div>
    </div>
@endsection

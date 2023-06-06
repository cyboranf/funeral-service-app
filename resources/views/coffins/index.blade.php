@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Trumny</h1>
                <a href="{{ route('coffins.create') }}" class="btn btn-primary">Dodaj trumnę</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Materiał</th>
                            <th>Kolor</th>
                            <th>Rozmiar</th>
                            <th>Cena</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coffins as $coffin)
                            <tr>
                                <td>{{ $coffin->id }}</td>
                                <td>{{ $coffin->material }}</td>
                                <td>{{ $coffin->color }}</td>
                                <td>{{ $coffin->size }}</td>
                                <td>{{ $coffin->priceOfCoffins }}</td>
                                <td>
                                    <a href="{{ route('coffins.show', $coffin) }}" class="btn btn-sm btn-primary">Pokaż</a>
                                    <a href="{{ route('coffins.edit', $coffin) }}" class="btn btn-sm btn-success">Edytuj</a>
                                    <form action="{{ route('coffins.destroy', $coffin) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Usuń</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

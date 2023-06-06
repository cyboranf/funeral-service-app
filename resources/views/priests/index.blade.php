@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Lista księży</h1>
                <a href="{{ route('priests.create') }}" class="btn btn-primary">Dodaj księdza</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Imię</th>
                            <th>Nazwisko</th>
                            <th>Religia</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($priests as $priest)
                            <tr>
                                <td>{{ $priest->name }}</td>
                                <td>{{ $priest->surname }}</td>
                                <td>{{ $priest->religion }}</td>
                                <td>
                                    <a href="{{ route('priests.show', $priest) }}" class="btn btn-primary">Pokaż</a>
                                    <a href="{{ route('priests.edit', $priest) }}" class="btn btn-secondary">Edytuj</a>
                                    <form action="{{ route('priests.destroy', $priest) }}" method="POST" style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Usuń</button>
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

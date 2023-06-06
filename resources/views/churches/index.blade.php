@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Kościoły</h1>
                <a href="{{ route('churches.create') }}" class="btn btn-primary">Dodaj Kościół</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nazwa</th>
                            <th>Adres</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($churches as $church)
                            <tr>
                                <td>{{ $church->id }}</td>
                                <td>{{ $church->name }}</td>
                                <td>{{ $church->address }}</td>
                                <td>
                                    <a href="{{ route('churches.show', $church) }}" class="btn btn-primary">Pokaż</a>
                                    <a href="{{ route('churches.edit', $church) }}" class="btn btn-secondary">Edytuj</a>
                                    <form action="{{ route('churches.destroy', $church) }}" method="POST" style="display: inline-block">
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

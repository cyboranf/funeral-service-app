@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Pogrzeby</h1>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Zmarły</th>
                            <th>Wiek</th>
                            <th>Użytkownik</th>
                            <th>Trumna</th>
                            <th>Kościół</th>
                            <th>Ksiądz</th>
                            <th>Cena</th>
                            <th>Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($funerals as $funeral)
                            <tr>
                                <td>{{ $funeral->id }}</td>
                                <td>{{ $funeral->deceased_name }}</td>
                                <td>{{ $funeral->deceased_age }}</td>
                                <td>{{ $funeral->user->name }}</td>
                                <td>{{ $funeral->coffin->material }}</td>
                                <td>{{ $funeral->church->name ?? 'Brak' }}</td>
                                <td>{{ $funeral->priest->name ?? 'Brak' }}</td>
                                <td>{{ $funeral->price }}</td>
                                <td>
                                    <a href="{{ route('funerals.show', $funeral) }}" class="btn btn-primary">Pokaż</a>
                                    <a href="{{ route('funerals.edit', $funeral) }}" class="btn btn-warning">Edytuj</a>
                                    <form action="{{ route('funerals.destroy', $funeral) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć ten pogrzeb?')">Usuń</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <a href="{{ route('funerals.create') }}" class="btn btn-success">Dodaj Pogrzeb</a>
            </div>
        </div>
    </div>
@endsection

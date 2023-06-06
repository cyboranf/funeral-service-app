@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Edytuj Kościół</h1>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('churches.update', $church) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Nazwa:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $church->name) }}" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Adres:</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $church->address) }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Zaktualizuj</button>
                    <a href="{{ route('churches.index') }}" class="btn btn-secondary">Anuluj</a>
                </form>
            </div>
        </div>
    </div>
@endsection

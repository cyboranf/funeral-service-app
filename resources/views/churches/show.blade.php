@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Kościół: {{ $church->name }}</h1>
                <p>Adres: {{ $church->address }}</p>
                <a href="{{ route('churches.index') }}" class="btn btn-secondary">Powrót</a>
            </div>
        </div>
    </div>
@endsection

<!doctype html>
<html lang="pl">

@include('shared.header')

<body>
    @include('shared.nav')

    <div class="container mt-5 mb-5">
        @if (session('error'))
            <div class="row d-flex justify-content-center">
                <div class="alert alert-danger">{{ session('error') }}</div>
            </div>
        @endif
        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane kraju</h1>
        </div>

        @if ($errors->any())
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('countries.update', $c->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name">Nazwa</label>
                        <input id="name" name="name" type="text" class="form-control" value="{{ $c->name }}">
                        <div class="invalid-feedback">Nieprawidłowe nazwa!</div>
                    </div>
                    {{-- Uzupełnienie formularza --}}
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Wyślij">
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('shared.footer')
</body>

</html>

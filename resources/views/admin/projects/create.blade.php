@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center">Aggiungi un nuovo progetto</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                {{-- @include('partials.errors')  --}}
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title">Titolo</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description">Descrizione</label>
                        <textarea rows="10" id="description" name="description" class="form-control" value="{{ old('description') }}"></textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <form action="{{ route('admin.work.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name='title' placeholder="Laravel">
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Argomento</label>
            <input type="text" class="form-control" id="subject" name='subject' placeholder="php">
        </div>
        <div class="d-flex gap-3">
            <div class="mb-3">
                <label for="start_date" class="form-label">Data di Inizio</label>
                <input type="date" class="form-control" id="start_date" name='start_date'>
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">Data fine progetto</label>
                <input type="date" class="form-control" id="end_date" name='end_date'>
            </div>
        </div>
        <div class="d-flex gap-3">
            <div class="mb-3">
                <label for="post" class="form-label">Post</label>
                <input type="numbers" class="form-control" id="post" name='post'>
            </div>
            <div class="mb-3">
                <label for="collaborators" class="form-label">Collaboratori</label>
                <input type="numbers" class="form-control" id="collaborators" name='collaborators'>
            </div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Example textarea</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button class="btn btn-success" type="submit">Invia</button>
        <button class="btn btn-danger" type="reset">Reset</button>

    </form>
@endsection

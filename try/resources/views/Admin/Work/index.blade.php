@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Argomento</th>
                <th scope="col">Data di inizio</th>
                <th scope="col">Data fine</th>
                <th scope="col">N_post</th>
                <th scope="col">N_collaboratori</th>
                <th scope="col">Azione</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($works as $work)
                <tr>

                    <td>{{ $work['id'] }}</td>
                    <td>{{ $work['title'] }}</td>
                    <td>{{ $work['subject'] }}</td>
                    <td>{{ $work['start_date'] }}</td>
                    <td>{{ $work['end_date'] }}</td>
                    <td>{{ $work['post'] }}</td>
                    <td>{{ $work['collaborators'] }}</td>
                    <td>
                        <a href="{{ route('admin.work.show', $work) }}" class="btn btn-success"><i
                                class="fa-solid fa-eye"></i></a>
                        <a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>
@endsection

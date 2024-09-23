@extends('layouts.app')

@section('content')
    <div class="card " style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $work->title }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $work->subject }}</h6>
            @if ($work->description != null)
                <p class="card-text">{{ $work->description }}</p>
            @else
                <p class="card-text"><strong>Nussuna descrizione per questo progetto</strong></p>
            @endif
            <ul>
                <li>Data inizio:{{ $work->start_date }}</li>
                @if ($work->end_date != null)
                    <li>Data Fine:{{ $work->end_date }}</li>
                @else
                    <li><strong>Lavoro Ancora in sviluppo</strong></li>
                @endif
                <li>Numero Post: {{ $work->post }}</li>
                @if ($work->collaborators > 0)
                    <li>Numero collaboratori: {{ $work->collaborators }}</li>
                @else
                    <li><Strong>Progetto individuale</Strong></li>
                @endif
            </ul>
            <a href="{{ route('admin.work.index') }}" class="card-link btn btn-secondary" title="Indietro"><i
                    class="fa-solid fa-table-cells"></i></a>
            <a href="" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
        </div>
    </div>
@endsection

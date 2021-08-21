@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">M&uuml;llarten</div>
                <div class="card-body">
                    @include('partials.messages')
                    <a class="btn btn-sm btn-success float-end ms-2 mt-3 mb-3" href="/trash_types/create"><i class="fas fa-plus"></i> Neue Müllart anlegen</a>
                    <table class="table table-sm">
                        <tr>
                            <th>#</th>
                            <th>Art</th>
                            <th>mit Artikel</th>
                            <th>Farbgestaltung</th>
                        </tr>
                        @foreach($trash_types as $trash_type)
                            <tr>
                                <td><a href="/trash_types/{{$trash_type->id}}">{{ $trash_type->id }}</a></td>
                                <td>{{ $trash_type->name }}</td>
                                <td>{{ $trash_type->with_article }}</td>
                                <td style="background-color: {{$trash_type->color}}; color: {{ $trash_type->text_color }};">{{ $trash_type->name }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

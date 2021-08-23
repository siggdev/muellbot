@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Müllart: {{ $trash_type->name }}</div>
                <div class="card-body">
                    <table class="table table-sm">
                        <tr>
                            <th scope="row" >Name</th>
                            <td style="min-width: 65%;">{{ $trash_type->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Beschreibung</th>
                            <td>{{ $trash_type->description }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Hintergrundfarbe</th>
                            <td style="background-color: {{ $trash_type->color }}; border: 1px solid black;"></td>
                        </tr>
                        </tr>
                        <tr>
                            <th scope="row">Schriftfarbe</th>
                            <td style="background-color: {{ $trash_type->text_color }}; border: 1px solid black;"></td>
                        </tr>
                    </table>
                    <a href="/trash_types/{{ $trash_type->id }}/edit" class="btn btn-sm mt-3 mb-3 ms-2 float-end btn-primary"><i class="fas fa-pen"></i> Bearbeiten</a>
                    <button class="btn btn-sm mt-3 mb-3 ms-2 float-end btn-danger"><i class="far fa-trash-alt"></i> L&ouml;schen</button>
                    <a href="/trash_types" class="btn btn-sm mt-3 mb-3 ms-2 float-end btn-secondary"><i class="fas fa-arrow-left"></i> Zur&uuml;ck</a>
                </div>
            </div>
        </div>
    </div>
@endsection

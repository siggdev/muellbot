@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">Neue M&uuml;llart erstellen</div>
            @livewire('trash-types-create')
        </div>
    </div>
</div>
@endsection

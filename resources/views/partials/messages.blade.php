@if( Session::has('success'))
    <div class="card-body">
        <div class="alert alert-success alert-disappear">
            {!! Session::get('success') !!}
        </div>
    </div>
@endif
@if( $errors->any() )
    <div class="card-body">
        <div class="alert alert-danger alert-disappear">
            <ul class="mt-3">
                @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

@if(session()->has('message'))
    <div class="alert alert-success">
        <div class="alert alert-success {{ Session::has('message') ? 'alert-important' : '' }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('message') }}
        </div>
    </div>
@endif


@if (count($errors) > 0)
    <div class="alert alert-danger {{ Session::has('errors') ? 'alert-important' : '' }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif
@if (session('csrf_error'))
    <div class="alert alert-danger text-center">
        {{ session('csrf_error') }}
    </div>
@elseif (Session::has('message_type') && Session::has('message'))
    <div class="alert alert-{{Session::get('message_type')}} text-center">
        {!! Session::get('message') !!}
    </div>
@elseif (Session::has('message'))
    <div class="alert alert-{{ Session::get('alert_type')? Session::get('alert_type') : 'success' }} text-center">
        {!! Session::get('message') !!}
    </div>
@endif

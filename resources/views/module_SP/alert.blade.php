@if($alert = session()->pull('alert'))
    <div class="alert alert-{{session()->pull('alert_type')}}">
        {{$alert}}
    </div>
@endif
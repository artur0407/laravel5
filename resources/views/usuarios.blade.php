<pre>

{{$texto}}

@if($check == true)
    check = true;
@else
    check = false;
@endif

@foreach($usuarios as $user)
    {{$user}}
@endforeach
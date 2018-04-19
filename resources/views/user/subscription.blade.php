@extends('user.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach( $subs as $sub)
                @include('user.card')
            @endforeach
        </div>
    </div>
@endsection
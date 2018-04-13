@extends('user.master')
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ URL::to('pensionPage') }}">Dashboard</a>
            </li>
            @for($i = 0; $i <= count(Request::segments()); $i++)
                <li class="breadcrumb-item active">{{Request::segment($i)}}</li>
            @endfor
        </ol>

        <div class="row">
            @foreach( $subs as $sub)
                @include('user.card')
            @endforeach
        </div>
    </div>
@endsection
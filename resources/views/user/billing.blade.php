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

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i>Purchased Subscriptions
            </div>
            <div class="card-body">

            </div>
            <div class="card-footer small text-muted"></div>
        </div>

    </div>
@endsection
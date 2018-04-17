@extends('user.master')
@section('content')
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">My Dashboard</li>
    </ol>
    @if (count($errors) > 0)
        @if($errors->has('payment'))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    @endif
    @if (session('status'))
        <div id="success" class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-area-chart"></i>Calulated Pension
        </div>
        <div class="card-body">
            @if( !$user->latestpayment )
                <div class="alert alert-info">
                    <strong>Info!</strong> Currently you don't  have any Subscriptions Please buy Calculate Pension
                </div>
            @elseif(  session('pension') )
                <div class="alert alert-success">
                    <label>Pension Amount:</label>
                    <strong>{{session('pension')}}</strong>
                </div>
            @endif
            <a  @if( !$user->latestpayment ) disabled @endif data-toggle="modal" data-target="#pensionModel" class="btn btn-primary" role="button">Calculate Pension</a>

        </div>
        <div class="card-footer small text-muted">
            <a href="{{ URL::to('showSubscription') }}" class="btn btn-info" role="button">Buy Subscription</a>
        </div>
    </div>

    {{--<div class="row">--}}
        {{--<div class="col-xl-3 col-sm-6 mb-3">--}}
            {{--<div class="card text-white card-colour-Greens o-hidden h-100">--}}
                {{--<div class="card-body">--}}
                    {{--<div class="card-body-icon">--}}
                        {{--<i class="fa fa-fw fa-fw fa-list"></i>--}}
                    {{--</div>--}}
                    {{--<div class="card_details">--}}
                        {{--<h2>test</h2>--}}
                        {{--<p>tes</p>--}}
                        {{--<p>test</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<a class="card-footer card-buy text-white clearfix small z-1" href="#">--}}
                    {{--<span class="byt-btn">Buy</span>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
</div>

@include('user.pensionModel')
@endsection
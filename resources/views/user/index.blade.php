@extends('user.master')
@section('content')
<div class="container">
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
            @endif
                @if( count( $user->latestpayment ) == 0 )
                    <a class="btn btn-primary disabled" role="button">Calculate Pension</a>
                @else
                    @foreach( $user->latestpayment as $latestpayment )
                        @php( $serverid = $latestpayment->id  )
                    <div class="alert alert-success">
                        <label>Pension Amount:</label>
                        <strong> ${{$latestpayment->pension}}</strong>
                    </div>
                    @endforeach
                    <a data-toggle="modal" data-target="#pensionModel" class="btn btn-info btn_pention" role="button">Calculate Pension</a>
                @endif
        </div>
    </div>
        {{--show subscriptions --}}
        <div class="row flat">
            @foreach( $subs as $sub)
                @include('user.card')
            @endforeach
        </div>
</div>

@include('user.pensionModel')
@endsection
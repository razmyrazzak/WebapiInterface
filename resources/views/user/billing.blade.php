@extends('user.master')
@section('content')
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i>Purchased Subscriptions
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Service</th>
                            <th>Payment Status</th>
                            <th>Price</th>
                            <th>Payed</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($payment))
                            <tr>
                                <td>{{$payment->service->name}}</td>
                                <td>{{$payment->payment[0]->status}}</td>
                                <td>{{$payment->service->price}}</td>
                                <td>{{ date('F d, Y', strtotime($payment->payment[0]->created_at)) }}</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    @if(isset( $error ))
                        <div class="alert alert-info">{{$error}}</div>
                    @endif
                </div>

            </div>
            <div class="card-footer small text-muted"></div>
        </div>

    </div>
@endsection
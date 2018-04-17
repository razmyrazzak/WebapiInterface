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
                        <tr>
                            <td>{{$payment->service->name}}</td>
                            <td>{{$payment->payment[0]->status}}</td>
                            <td>{{$payment->service->price}}</td>
                            <td>{{ date('F d, Y', strtotime($payment->payment[0]->created_at)) }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card-footer small text-muted"></div>
        </div>

    </div>
@endsection
@extends('activation.master')
@section('content')
    @include('activation.nav')
    <div class="confirmation-msg">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Confirmation Message</div>
            <div class="card-body">
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
                    @if(isset($error))
                        <div  class="alert alert-danger">
                            {{ $error }}
                        </div>
                    @endif
                    @if(isset($msg))
                        <div  class="alert alert-success">
                            {{ $msg }}
                        </div>
                    @endif
                    @if(isset($local))
                        <div  class="alert alert-info">
                            This is only for local,  Activation Hash: {{ $local }}
                        </div>
                    @endif
                <div class="text-center">
                    <a class="btn btn-primary " href="{{ URL::to('loginShow') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    @include('site.footer')
@endsection
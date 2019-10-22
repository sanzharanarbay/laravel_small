@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Welcome! {{Auth::user()->name}}
                        @if(!Auth::check() || Auth::user()->hasRole('manager'))
                            <a class="btn btn-sm btn-danger" href="{{route('manager')}}"> Manager Page</a>
                                <a class="btn btn-sm btn-danger" href="{{route('response.index')}}"> My responses</a>


                        @elseif(!Auth::check() || Auth::user()->hasRole('client'))
                            <a class="btn btn-sm btn-primary" href="{{route('client')}}"> Client Page</a>
                                <a class="btn btn-sm btn-primary" href="{{route('contact.create')}}">Create Request</a>
                                <a class="btn btn-sm btn-primary" href="{{route('contact.index')}}">My Requests</a>
                                <a class="btn btn-sm btn-primary" href="{{route('myresponses')}}"> Responses</a>
                        @else
                            <h1 class="text-danger">You are don't exist in System! Please contact to your Administrator!</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

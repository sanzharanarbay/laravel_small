@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <div class="jumbotron">
                            <h1 class="text-danger"> You don't have permission to this Page!!!</h1>
                            <a href="{{url('/home')}}" class="btn btn-sm btn-secondary"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

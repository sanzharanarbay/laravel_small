@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Client</div>

                    <div class="card-body">
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Client Name</h6>
                                    <small class="text-muted">Brief description</small>
                                </div>
                                <span class="text-muted">{{Auth::user()->name}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Client Email</h6>
                                    <small class="text-muted">Brief description</small>
                                </div>
                                <span class="text-muted">{{Auth::user()->email}}</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

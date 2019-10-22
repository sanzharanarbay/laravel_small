@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">Responses of : {{Auth::user()->name}}</div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">Message</th>
                                <th scope="col">Status</th>
                                <th scope="col">Response</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($responses as $response)
                                <tr>
                                    <td>{{$response->client_name}}</td>
                                    <td>{{$response->contacts->title}}</td>
                                    <td>{{$response->message}}</td>
                                    <td><span class="text-success">Responded</span></td>
                                    <td>{{$response->response_text}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$responses->links()}}



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

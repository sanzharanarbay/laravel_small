@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">Manager</div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Title</th>
                                <th scope="col">Message</th>
                                <th scope="col">Respond</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$contact->client_name}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->title}}</td>
                                    <td>{{$contact->message}}</td>
                                    <td>
                                        <a href="{{route('respond.create', $contact->id)}}" class="btn btn-sm btn-success"> Respond</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$contacts->links()}}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

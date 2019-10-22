@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">My Responses</div>

                    <div class="card-body">

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Title</th>
                                <th scope="col">Message</th>
                                <th scope="col">Respond</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($responses as $response)
                                <tr>
                                    <td>{{$response->client_name}}</td>
                                    <td>{{$response->contacts->title}}</td>
                                    <td>{{$response->message}}</td>
                                    <td>{{$response->response_text}}</td>
                                    <td>
                                        <form id="delete-form-{{$response->id}}" action="{{route('response.destroy',
                                               $response->id)}}" style="display:none;" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button type="button" class="btn btn-danger btn-sm"
                                                onclick="if(confirm('Are you sure?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$response->id}}').submit();
                                                    }else{
                                                    event.preventDefault();

                                                    }">
                                            Delete</button>
                                    </td>
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

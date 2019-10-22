@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">My Requests</div>

                    <div class="card-body">
                        <div class="float-right">
                            <a href="{{route('contact.create')}}" class="btn btn-sm btn-primary"> Create Request</a>
                        </div><br><br>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Title</th>
                                <th scope="col">Message</th>
                                <th scope="col">Delete</th>
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
                                        <form id="delete-form-{{$contact->id}}" action="{{route('contact.destroy',
                                               $contact->id)}}" style="display:none;" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button type="button" class="btn btn-danger btn-sm"
                                                onclick="if(confirm('Are you sure?')){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{$contact->id}}').submit();
                                                    }else{
                                                    event.preventDefault();

                                                    }">
                                            Delete</button>
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



@endsection()

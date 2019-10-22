@extends('layouts.app')


@section('content')


    <!--Section: Contact v.2-->
    <div class="container">
        <section class="mb-4 ml-5">

            <!--Section heading-->
            <h1>Request by : {{$contact->client_name}}</h1>

            <!--Grid column-->

            <form  method="POST" action="{{route('response.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="text" id="name" name="client_name" value="{{$contact->client_name}}" class="form-control" readonly>
                        <input type="hidden" name="client_id" value="{{$contact->client_id}}" >
                        <input type="hidden" name="contact_id" value="{{$contact->id}}" >
                        <label for="name" class="">Contact name</label>
                    </div>
                </div>

                <!--Grid column-->

                <!--Grid column-->

                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="text" id="email" name="email" value="{{$contact->email}}" class="form-control" readonly>
                        <label for="email" class="">Contact email</label>
                    </div>
                </div>

                <!--Grid row-->

                <div class="form-group row">
                    <div class="col-md-12">
                        <input type="text" id="subject" name="title" class="form-control" value="{{$contact->title}}" readonly>
                        <label for="subject" class="">Title</label>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-md-12">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" readonly>
                            {{$contact->message}}
                        </textarea>
                        <label for="message">Message</label>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <textarea type="text" id="response" name="response_text" rows="2" class="form-control md-textarea"></textarea>
                        <label for="response">Response</label>
                    </div>
                </div>

                <!--Grid row-->
                <div class="text-center text-md-left">
                    <button type="submit" class="btn btn-sm btn-primary">Send</button>
                </div>
            </form>

        </section>
    </div>

    <!--Grid column-->

    <!--Grid column--

</div>

</section>
<!--Section: Contact v.2-->



@endsection()

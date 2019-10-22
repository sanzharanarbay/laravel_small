@extends('layouts.app')


@section('content')


    <!--Section: Contact v.2-->
    <div class="container">
    <section class="mb-4 ml-5">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
            a matter of hours to help you.</p>



            <!--Grid column-->

                <form  method="POST" action="{{route('contact.store')}}" enctype="multipart/form-data">
                    @csrf
                            <div class="form-group row">
                                <div class="col-md-12">
                                <input type="text" id="name" name="client_name" value="{{Auth::user()->name}}" class="form-control" readonly>
                                <input type="hidden" name="client_id" value="{{Auth::user()->id}}" >
                                <label for="name" class="">Your name</label>
                                </div>
                            </div>

                        <!--Grid column-->

                        <!--Grid column-->

                            <div class="form-group row">
                                <div class="col-md-12">
                                <input type="text" id="email" name="email" value="{{Auth::user()->email}}" class="form-control" readonly>
                                <label for="email" class="">Your email</label>
                            </div>
                            </div>

                    <!--Grid row-->

                            <div class="form-group row">
                                <div class="col-md-12">
                                <input type="text" id="subject" name="title" class="form-control">
                                <label for="subject" class="">Title</label>
                            </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-12">
                                <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                <label for="message">Your message</label>
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

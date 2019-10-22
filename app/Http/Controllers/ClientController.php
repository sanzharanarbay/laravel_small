<?php

namespace App\Http\Controllers;

use App\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public  function index(){
        return view('client.index');
    }
    public function myresponses(){
        $userid = Auth::user()->id;
        $responses = Response::with('contacts')->where('client_id',$userid)->paginate(10);
        return view('client.myresponses',compact('responses'));
    }
}

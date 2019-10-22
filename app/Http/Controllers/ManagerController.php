<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagerController extends Controller
{
    public function index(){
        $contacts = DB::table('contacts')->paginate(10);
        return view('manager.index',compact('contacts'));
    }
    public function create($id){
        $contact = Contact::findOrFail($id);
        return view('manager.response.create', compact('contact'));
    }

}

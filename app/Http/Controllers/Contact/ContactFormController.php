<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\ContactFormRequest;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function input(){
        return view('contact.input');
    }

    public function check(ContactFormRequest $request){
        $request->session();
        $data = $request;
        return view('contact.check')->with('data',$data);
    }
}

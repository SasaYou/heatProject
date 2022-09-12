<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function input(){
        return view('contact.input');
    }

    public function check(){
        return view('#');
    }
}

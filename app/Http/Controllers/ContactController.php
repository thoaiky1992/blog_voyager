<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index(){
        return view('lienhe');
    }
    public function create(Request $request){
        Contact::create($request->all());
        return redirect()->back()->withSuccess('Gửi thành công !');
    }
}

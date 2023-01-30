<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\register;
use App\Models\addproduct;
use App\Models\adminaddabout;

class indexController extends Controller
{
    
    public function index()
    {
         $data['res'] = addproduct::get();
        return view('index',$data);
    }
    public function aboutindex()
    {
        $data['res'] = adminaddabout::get();
        return view('aboutindex',$data);
    }
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function gallery()
    {
        $data['res'] = addproduct::get();
        return view('gallery',$data);
    }
    public function contact()
    {
        return view('contact');
    }
    public function regaction(Request $req)
    {
        $name = $req->input('name');
        $contactno = $req->input('contactno');
        $address = $req->input('address');
        $email = $req->input('email');
        $password = $req->input('password');
        $data = [
            'name' => $name,
            'contactno' => $contactno,
            'address'=>$address,
            'email' => $email,
            'password' => $password
        ];
        register::insert($data);
        return redirect('/register');   
    }
    public function loginaction(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');
        $data = register::where('email', $email)->where('password', $password)->first();
        if (isset($data)) {
            $req->session()->put(array('sess' => $data->id));
            return redirect('/index');
        } else {
            return redirect('/login');
        }
    }
    public function contactaction(Request $req)
    {

        $name = $req->input('name');
        $email = $req->input('email');
        $subject = $req->input('subject');
        $message = $req->input('message');
        $data = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message
        ];
        contact::insert($data);
        return redirect('contact');

    }
   
}

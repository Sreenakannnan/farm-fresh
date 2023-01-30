<?php

namespace App\Http\Controllers;

use App\Models\addproduct;
use App\Models\admin;
use App\Models\adminaddabout;
use App\Models\register;
use App\Models\contact;
use Illuminate\Http\Request;


class adminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function addabout()
    {
        return view('admin.addabout');
    }
    public function viewabout()
    {
        $data['res'] = adminaddabout::get();
        return view('admin.viewabout', $data);
    }
    public function editabout($id)
    {
        $data['res'] = adminaddabout::where('id', $id)->get();
        return view('admin.editabout', $data);
    }
    public function editaboutaction(Request $req, $id)
    {
        $subject = $req->input('subject');
        $description = $req->input('description');
        $data = [
            'subject' => $subject,
            'description' => $description
        ];
        adminaddabout::where('id', $id)->update($data);
        return redirect('admin.viewabout');
    }
    public function delete($id)
    {
        adminaddabout::where('id', $id)->delete();
        return redirect('/viewabout');
    }
    public function editprofile()
    {
        return view('admin.editprofile');
    }


    public function viewuser()
    {
        $data['res'] = register::get();
        return view('admin.viewuser',$data);
    }
    public function addproduct()
    {
        return view('admin.addproduct');
    }

    public function viewcomplaints()
    {
        $data['res'] =contact::get();
        return view('admin.viewcomplaints',$data);
    }
    public function viewprofile()
    {
        $data['res'] = admin::get();
        return view('admin.viewprofile',$data);
    }
    public function vieworder()
    {
        return view('admin.vieworder');
    }
    public function viewpayments()
    {
        return view('admin.viewpayments');
    }
    public function adminlogout()
    {
        return view('adminlogout');
    }
    public function aboutaction(Request $req)
    {
        $subject = $req->input('subject');
        $description = $req->input('description');
        $data = [
            'subject' => $subject,
            'description' => $description
        ];
        adminaddabout::insert($data);
        return redirect('/admin.viewabout');
    }
    public function addproductaction(Request $req)
    {
        $name = $req->input('name');
        $price = $req->input('price');
        $description = $req->input('description');
        $image = $req->file('uploadimage');
        $filename = $image->getClientOriginalName();
        $image->move(public_path() . '/file/', $filename);
        $data = [
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'image' => $filename
        ];
        addproduct::insert($data);
        return view('admin.viewproduct');
    }
    public function viewproduct()
    {
        $data['res'] = addproduct::get();
        return view('admin.viewproduct', $data);
    }
    public function editproduct($id)
    {
        $data['res'] = addproduct::where('id', $id)->get();
        return view('admin.editproduct', $data);
    }
    public function editproductaction(Request $req,$id)
    {
        $name = $req->input('name');
        $price = $req->input('price');
        $description = $req->input('description');
        $image = $req->file('uploadimage');
        $filename = $image->getClientOriginalName();
        $image->move(public_path() . '/file/', $filename);
        $data = [
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'image' => $filename
        ];
        addproduct::where('id', $id)->update($data);
        return redirect('/viewproduct');
    }
    public function deleteproduct($id)
    {
        addproduct::where('id', $id)->delete();
        return redirect('/viewproduct');
    }
    public function approved ($id){
        $data = ['status' => "approved"];
        contact::where('id',$id)->update($data);
        return redirect('/viewcomplaints');
    }
    public function declined($id){
        $data = ['status' => "declined"];
        contact::where('id',$id)->update($data);
        return redirect('/viewcomplaints');

    }

}
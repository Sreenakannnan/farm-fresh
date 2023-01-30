<?php

namespace App\Http\Controllers;

use App\Models\addproduct;
use App\Models\adminaddabout;
use App\Models\cart;
use App\Models\buyproduct;
use App\Models\register;
use Illuminate\Http\Request;


class userController extends Controller
{
   public function index()
   {
      $data['res'] = addproduct::get();
      return view('user.index', $data);
   }
   public function profile()
   {
      $id = session('sess');
      $data['res'] = register::where('id', $id)->get();
      return view('user.profile',$data);
   }
   public function profileaction(Request $req,$id)
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
      register::where('id',$id)->update($data);
      return redirect('user.prfile');
   }
   public function viewcart()
   {
      $id = session('sess');
      $data['res'] = cart::join('addproducts', 'addproducts.id', '=', 'carts.productid')
         ->where('carts.status', 'Addtocart')
         ->where('carts.userid', $id)
         ->select('addproducts.image', 'carts.id', 'carts.name', 'carts.quantity', 'carts.price', 'carts.total', 'carts.userid')
         ->get();
      $data['sum'] = cart::where('userid', $id)->where('status', 'Addtocart')
         ->select(cart::raw("SUM(total) as subtotal"))
            //   ->orderBy("created_at")
            //   ->groupBy(cart::raw("year(created_at)"))
         ->get();
      // print_r($data['sum']);
//       exit();
      return view('user.viewcart', $data);
   }
   public function about()
   {
      $data['res'] = adminaddabout::get();
      return view('user.about',$data);
   }
   public function vieworder()
   {
      $id = session('sess');
      $data['res'] = buyproduct::where('userid', $id)->get();
      // ->select('buyproduct.id', 'buyproduct.total')
      // ->get();
      return view('user.vieworder',$data);
   }
   public function userlogout()
   {
      return view('user.logout');
   }

   public function addtocart($id)
   {
      $data['res'] = addproduct::where('id', $id)->get();
      return view('user.addtocart', $data);
   }
   public function addtocartaction(Request $req, $userid)
   {
      $userid = session('sess');
      $productid = $req->input('productid');
      $name = $req->input('name');
      $price = $req->input('price');
      $quantity = $req->input('quantity');
      $total = $req->input('total');
      $data = [
         'productid' => $productid,
         'name' => $name,
         'price' => $price,
         'quantity' => $quantity,
         'total' => $total,
         'userid' => $userid
      ];
      cart::insert($data);
      return redirect('viewcart');
   }
   public function delete($id)
   {
      // $id = session('sess');
      cart::where('id',$id)->delete();
      return redirect('viewcart');

   }
    public function buyproduct($total)
   {
      $id=session('sess');
      $data = ['status' => 'order'];
      cart::where('userid', $id)->where('status', "Addtocart")->update($data);
      $data1 = [
         'userid' => $id,
         'total' => $total
      ];
      buyproduct::insert($data1);
      $data['res'] = cart::join('buyproducts','buyproducts.userid','=','carts.userid')
      ->join('addproducts','carts.productid','=','addproducts.id')
      ->where('buyproducts.userid', $id)->where('carts.status', "order")
      ->select('addproducts.image', 'carts.id', 'carts.name', 'carts.quantity', 'carts.price', 'carts.total')
      ->get();
      return redirect('/index');
   }
   public function proceedtobuy()
   {
      return view('user.proceedtobuy');
   }
}
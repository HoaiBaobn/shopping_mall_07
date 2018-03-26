<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Eloquent;
use App\Models\Bill;
use App\Models\BillDetail;
use Carbon\Carbon;
use App\Models\Product;

class cartController extends Controller
{
    public function index(){
        $cart = Cart::content();
        return view('pages.cart',['data' => $cart]);
    }
    public function addItem($id){
        $pro = Product::find($id);

        Cart::add([ 
            'id' => $pro->id, 
            'name' => $pro->name,
            'price' => $pro->price,
            'qty' => 1,
            'options' => [
                'img' => $pro->img,
                'dis' => $pro->discount
            ]
        ]);

        return back();
    }

    public function updateCart(Request $req){
        if($req->ajax()){
            $qty = $req->qty;
            $rowId = $req->rowid;
            Cart::update($rowId, $qty);
            return back();
            
        }
    }

    public function deleteCart($id){
        Cart::remove($id);
        return back();
    }

    public function checkout(){
        $cart = Cart::content();
        return view('pages.checkout',['data' => $cart]);
    }


    public function postcheckout(Request $req){
        Eloquent::unguard();

        $bill = Bill::create([
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->number,
            'address' => $req->address,
            'purchase_date' => Carbon::now(),
        ]);
        $billId = $bill->id;

        $cart= Cart::content();
        foreach($cart as $item){

            BillDetail::create([

                'bill_id' => $billId,
                'pro_id' => $item->id,
                'price' => $item->price,
                'quantity' => $item->qty,
            ]);
        }

        return view('pages.thanks',['data' => $cart, 'bill' => $bill]);
    }
    public function thanks(){
       
        return view('pages.thanks');
      
    }

}

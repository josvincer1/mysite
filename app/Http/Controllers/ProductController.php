<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class ProductController extends Controller
{
   
    public function index()
    {
       $products=Product::Where('isDelete',0)->get();
     
       return view('Product/product')->with('products',$products);
    }

    public function viewProduct(Request $request)
    {
       
       $product_details=Product::Where('id',$request->id)->first();
       $products=Product::Where('productCategory','Special')->get();
     
       return view('Product/viewProduct')->with('product_details',$product_details)->with('products',$products);
    }
    public function addToCartProduct(Request $request)
    {
       $product_details=Product::Where('id',$request->id)->first();
       return view('Product/addToCartProduct')->with('product_details',$product_details);
    }
    public function addOrder(Request $request)
    {
        $input=$request->all();
                 
        $validator = Validator::make($request->all(), [
                'orderFirstName' => 'required', 
                'orderEmail' => 'email',
                'orderPhoneNumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
               
            ]);
    
            if ($validator->fails()) {

                    dd($validator);
                      return redirect()->back()->withErrors($validator)->withInput();
                    }
               else{   
         
                        $orderProductName=$input['orderProductName'];
                        $orderQuantity =$input['orderQuantity'];
                        $orderTotal=$input['orderTotal'];
                        $orderFirstName=$input['orderFirstName'];
                        $orderSecondName=$input['orderSecondName'];
                        $orderAddress=$input['orderAddress'];
                        $orderCity=$input['orderCity'];
                        $orderState=$input['orderState'];
                        $orderZip=$input['orderZip'];
                        $orderEmail=$input['orderEmail'];
                        $orderPhoneNumber=$input['orderPhoneNumber'];
                        Order::create(['orderProductName' => $orderProductName, 
                        'orderQuantity' => $orderQuantity,
                        'orderTotal'=>$orderTotal,
                        'orderFirstName'=>$orderFirstName,
                        'orderSecondName'=>$orderSecondName,
                        'orderAddress'=>$orderAddress,
                        'orderCity'=>$orderCity,
                        'orderState'=>$orderState,
                        'orderZip'=>$orderZip,
                        'orderEmail'=>$orderEmail,
                        'orderPhoneNumber'=>$orderPhoneNumber,
                        'orderStatus'=>"New",
                        'isDelete'=>0,
                        'isUpdate'=>0,
                        'CreatedBy'=>'Admin',
                        'created_at'=> date("Y-m-d H:i:s")]);
                        return redirect('Product/product')->with('message', 'Order Successfully Completed');
               }
         
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}

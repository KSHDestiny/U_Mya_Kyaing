<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // order page
    public function orderPage(){
        // dd(request('name'));
        $customerData = Order::when(request('name'),function($query){
            $query->where('customer_name','like','%'.request('name').'%');
        })
                        ->when(request('location'),function($query){
                            $query->where('location','like','%'.request('location').'%');
                        })
                        ->when(request('id'),function($query){
                            $query->where('order_id','like','%'.request('id').'%');
                        })
                        ->when(request('quantity'),function($query){
                            $query->where('quantity',request('quantity'));
                        })
                        ->orderBy('order_id','asc')
                        ->paginate(10);
        $customerData->appends(request()->all());
        return view('yeemon.order',compact('customerData'));
    }

    // add page
    public function addPage(){
        return view('yeemon.add');
    }

    // add
    public function add(Request $request){
        $data = $this->getCustomerData($request);
        Order::create($data);

        return redirect()->route('orderPage');
    }

    // edit page
    public function editPage($id){
        $data = Order::where('order_id',$id)->first();
        return view('yeemon.edit',compact('data'));
    }

    // edit order
    public function edit($id, Request $request){
        $data = $this->getCustomerData($request);
        Order::where('order_id',$id)->update($data);

        return redirect()->route('orderPage');
    }

    // delete order
    public function delete($id){
        Order::where('order_id',$id)->delete();
        return back();
    }

    // add data
    private function getCustomerData($request){
        return [
            'order_id' => $request->orderId,
            'customer_name' => $request->customerName,
            'facebook_acc' => $request->customerFacebook,
            'phone' => $request->customerPhone,
            'location' => $request->customerLocation,
            'quantity' => $request->customerQuantity,
            'amount' => $request->customerAmount,
            'note' => $request->note
        ];
    }
}

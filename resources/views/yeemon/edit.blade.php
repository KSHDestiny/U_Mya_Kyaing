
@extends('layouts.master')

@section('title','Edit Order Page')
@section('content')
    <form action="{{route('edit',[$data->order_id])}}" method="POST">
        @csrf
        <div class="d-flex flex-column col-4 offset-4 my-2">
            <input type="text" name="orderId" class="form-control my-1" placeholder="Enter Order Id..." value="{{old('orderId',$data->order_id)}}">

            <input type="text" name="customerName" class="form-control my-1" placeholder="Enter Customer Name..." value="{{old('customerName',$data->customer_name)}}">

            <input type="text" name="customerFacebook" class="form-control my-1" placeholder="Enter Customer Facebook Link..." value="{{old('customerFacebook',$data->facebook_acc)}}">

            <input type="text" name="customerPhone" class="form-control my-1" placeholder="Enter Customer Phone Number..." value="{{old('customerPhone',$data->phone)}}">

            <input type="text" name="customerLocation" class="form-control my-1" placeholder="Enter Delivery Location..." value="{{old('customerLocation',$data->location)}}">

            <input type="text" name="customerQuantity" class="form-control my-1" placeholder="Enter Customer Order Quantity..." value="{{old('customerQuantity',$data->quantity)}}">

            <input type="text" name="customerAmount" class="form-control my-1" placeholder="Enter Payment Amount..." value="{{old('customerAmount',$data->amount)}}">

            <textarea name="note" id="" cols="30" rows="5" placeholder="Enter Your Note..."></textarea>

            <input type="submit" class="btn bg-dark text-white col-4 offset-8 mt-2" value="Edit Order">
        </div>
    </form>
@endsection

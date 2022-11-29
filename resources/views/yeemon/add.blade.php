
@extends('layouts.master')

@section('title','Add List Page')
@section('content')
    <form action="{{route('add')}}" method="POST">
        @csrf
        <div class="d-flex flex-column col-4 offset-4 my-2">
            <input type="text" name="orderId" class="form-control my-1" placeholder="Enter Order Id...">

            <input type="text" name="customerName" class="form-control my-1" placeholder="Enter Customer Name...">

            <input type="text" name="customerFacebook" class="form-control my-1" placeholder="Enter Customer Facebook Link...">

            <input type="text" name="customerPhone" class="form-control my-1" placeholder="Enter Customer Phone Number...">

            <input type="text" name="customerLocation" class="form-control my-1" placeholder="Enter Delivery Location...">

            <input type="text" name="customerQuantity" class="form-control my-1" placeholder="Enter Customer Order Quantity...">

            <input type="text" name="customerAmount" class="form-control my-1" placeholder="Enter Payment Amount...">

            <textarea name="note" id="" cols="30" rows="5" placeholder="Enter Your Note..."></textarea>

            <input type="submit" class="btn bg-dark text-white col-4 offset-8 mt-2" value="Add List">
        </div>
    </form>
@endsection

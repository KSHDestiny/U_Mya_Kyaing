
@extends('layouts.master')

@section('title','Order Page')
@section('content')
    <div class="row">
        <div class="col-3 offset-9">
            {{-- <form action="{{route('category#list')}}" method="get" class="d-flex">
                @csrf
                <input type="text" name="key" class="form-control" placeholder="Search..." value="{{request('key')}}">
                <button class="btn btn-dark text-white" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form> --}}
            <a href="{{route('addPage')}}">
                <button type="button" class="btn btn-dark">Add list</button>
            </a>
            <span class="btn btn-success">
                Total : {{$customerData->total()}}
            </span>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            Search by id :
            <form action="{{route('orderPage')}}" method="get" class="d-flex">
                @csrf
                <input type="text" name="id" class="form-control" placeholder="Search..." value="{{request('id')}}">
                <button class="btn btn-dark text-white" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div class="col-3">
            Search by name :
            <form action="{{route('orderPage')}}" method="get" class="d-flex">
                @csrf
                <input type="text" name="name" class="form-control" placeholder="Search..." value="{{request('name')}}">
                <button class="btn btn-dark text-white" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div class="col-3">
            Search by location :
            <form action="{{route('orderPage')}}" method="get" class="d-flex">
                @csrf
                <input type="text" name="location" class="form-control" placeholder="Search..." value="{{request('location')}}">
                <button class="btn btn-dark text-white" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <div class="col-3">
            Search by quantity :
            <form action="{{route('orderPage')}}" method="get" class="d-flex">
                @csrf
                <input type="text" name="quantity" class="form-control" placeholder="Search..." value="{{request('quantity')}}">
                <button class="btn btn-dark text-white" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table  class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Fb Acc</th>
                    <th>Phone</th>
                    <th>Location</th>
                    <th>Quantity</th>
                    <th>Amount</th>
                    <th>Note</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customerData as $customer)
                    <tr>
                        <td class="">{{$customer->order_id}}</td>
                        <td>{{$customer->customer_name}}</td>
                        <td>{{$customer->facebook_acc}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>{{$customer->location}}</td>
                        <td>{{$customer->quantity}}</td>
                        <td>{{$customer->amount}}0</td>
                        <td>{{$customer->note}}</td>
                        <td class="me-5" title="Edit Customer Order">
                            <a href="{{route('editPage',[$customer->order_id])}}">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td title="Delete Customer Order">
                            <a href="{{route('delete',[$customer->order_id])}}">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <div class="mt-3">
            {{$customerData->appends(request()->query())->links()}}
        </div>
    </div>

@endsection

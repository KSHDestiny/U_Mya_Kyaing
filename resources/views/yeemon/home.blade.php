@extends('layouts.master')

@section('title','Home Page')
@section('content')
    <div class="row bg-dark text-white rounded-2">
        <div class="col-4 offset-1">
            <h3 class="mx-5">Image</h3>
        </div>
        <div class="col-2">
            <h3 class="mx-3">Size</h3>
        </div>
        <div class="col-3 offset-1">
            <h3 class="mx-3">Price</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-4 offset-1">
            <img src="{{asset('image/Large.jpg')}}" style="width: 200px; height: 300px" alt="">
        </div>
        <div class="col-7 d-flex flex-column justify-content-around">
            <div class="row">
                <div class="col-4">
                    <h2>Small</h2>
                </div>
                <div class="col-6 offset-1">
                    <h3>10000 kyats</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <h2>Medium</h2>
                </div>
                <div class="col-6 offset-1">
                    <h3>15000 kyats</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <h2>Large</h2>
                </div>
                <div class="col-6 offset-1">
                    <h3>20000 kyats</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

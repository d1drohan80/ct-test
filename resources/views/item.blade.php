@extends('layouts.app')

@section('title', 'CT Items')

@section('content')
    <h2>Add Item Form</h2>
    @if(Session::has('success'))
        <p>{{ Session::get('success') }}</p>
    @endif
    <form action='/' method="post">
        @csrf
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <label for="productName">Product Name</label>
                <input type="text" name="productName" id="productName" required/>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <label for="productQty">Product Quantity In Stock</label>
                <input type="text" name="productQty" id="productQty" required/>&nbsp;&nbsp;<small>(If 0 please enter 0)</small>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <label for="productCost">Product Cost Per Item</label>
                $<input type="text" name="productCost" id="productCost"/>&nbsp;&nbsp;<small>(Ex. 3.20)</small>
            </div>
        </div>
        <div class="row">
            <div class="col-m4-4 col-md-offset-4">
                <button class="btn btn-default" type="submit" name="submitProductInfoBtn" value="Process Product">Process Product</button>
            </div>
        </div>
    </form>
@endsection

@extends('FrontEnd.master')
@section('title')
    Cart Show item
@endsection
@section('content')
    <div class="products">
        <div class="container">
            <div class="col-md-9 product-w3ls-right">

                <div class="card">
                    <h3 class="card-header text-center mt-3" style="background-color: lemonchiffon; height: 40px; width: auto" >
                        Cart Items
                    </h3>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Remove</th>
                                <th scope="col" class="text-success">Item Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($CartDish as $dish)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <th scope="row">
                                    <a href="{{route('remove_item',['rowId'=>$dish->rowId])}}" type="button" class="btn btn-danger">
                                        <span aria-hidden="true"></span>
                                    </a>
                                </th>
                                <td>{{$dish->name}}</td>
                                <td><img src="{{asset($dish->options->image)}}" style="width: 50px; height: 50px"></td>
                                <td>{{$dish->price}} BDT</td>
                                <td>{{$dish->qty}}</td>
                                <td>{{$subTotal=$dish->price*$dish->qty}} BDT</td>
                                <td>{{$dish->subTotal}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

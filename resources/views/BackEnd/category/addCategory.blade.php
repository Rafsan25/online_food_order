@extends('BackEnd.master')
@section('title')

    Category Page
@endsection
@section('content')

    <h1>Add Category here</h1>

    <div class="container">
        <div class="row">
            <div class="offset-3 col-md-5 my-lg-5">
                <div class="card">
                    <div class="card-header text-center">
                        Category
                    </div>
                    <div class="card-body">

                        <form action="" method="post">


                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" class="form-control" name="category_name">
                            </div>
                            <div class="form-group">
                                <label>Order Number</label>
                                <input type="number" class="form-control" name="order_number">
                            </div>
                            <div class="form-group">
                                <label>Added On</label>
                                <input type="date" class="form-control" name="added_on">
                            </div>
                            <div class="form-group">
                                <label>Category Status</label>
                                <div class="radio">
                                    <input type="radio" name="category_status" value="1">Active
                                    <input type="radio" name="category_status" value="8">Inactive
                                </div>
                            </div>
                            <button type="submit" name="btn" class="btn btn-outline-primary btn-block">Category Add</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


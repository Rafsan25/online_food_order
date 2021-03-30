@extends('BackEnd.master')
@section('title')
    Category manage
@endsection
@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Category Name</th>
                    <th>Order Number</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($categories as $cate)
                <tr>
                    <td>{{$i++}}</td>
                    <td>
                        {{$cate->category_name}}
                    </td>
                    <td>{{$cate->order_number}}</td>
                    <td>
                        @if($cate->category_status==1)
                            <a class="btn btn-outline-success" href="{{route('inactive_cate',['category_id'=>$cate->category_id])}}">
                                <i class="fas fa-arrow-up"title="Click to deactivate"></i>
                            </a>
                        @else
                            <a class="btn btn-outline-info" href="{{route('category_active',['category_id'=>$cate->category_id])}}">
                                <i class="fas fa-arrow-down"title="Click to activate"></i>
                            </a>
                        @endif
                            <a type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#edit{{$cate->category_id}}">
                                <i class="fas fa-edit"title="Click to activate"></i>
                            </a>
                            <a class="btn btn-outline-dark" href="{{route('cate_delete',['category_id'=>$cate->category_id])}}">
                                <i class="fas fa-trash" title="Delete"></i>
                            </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

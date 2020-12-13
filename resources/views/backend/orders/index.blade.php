@extends('backend.layouts.master')
@section('content-header')
    <!-- Content Header -->
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Đơn hàng</h1>
                {{--                bao loi session--}}
                @if(session()->has('success'))
                    <span style="color: white;background-color: green;">{{session()->get('success')}}</span>
                @else
                    <span style="color: white;background-color: red;">{{session()->get('error')}}</span>
                @endif
                {{--                ket thuc bao loi session--}}
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('content')
    <!-- Content -->
    <div class="container-fluid">
        <!-- Main row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Sản phẩm mới nhập</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Show Product</th>
                                <th>User_id</th>
                                <th>Product_id</th>
                                <th>Money</th>
                                <th>Xử lý</th>
                                <th>Xóa</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr>

                                <td>{{$order->id}}</td>
                                <td><a href="{{route('order.showProducts',$order->id)}}" class="btn btn-primary">Show</a></td>
                                <td>{{$order->user_id}}</td>
                                <td>{{$order->product_id}}</td>
                                <td>{{$order->money}}</td>
                                <td><a href="" class="btn btn-success">Duyệt</a></td>
                                <td>
                                    <form action="{{route('order.destroy',$order->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i> Xoá
                                        </button>
                                    </form>
                                </td>



                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{ $orders->links() }}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection

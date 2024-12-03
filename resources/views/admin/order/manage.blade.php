
@extends('admin.master')
@section('title')
    Add Product
@endsection
@section('body')
    <section class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Order Info</h4>
                    <p class="card-title-desc">DataTables has most features enabled by
                        default, so all you need to do to use it with your own tables is to call
                        the construction function:
                    </p>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Order No</th>
                            <th>Customer Info</th>
                            <th>Order Status</th>
                            <th>Order Date</th>
                            <th>Payment type  </th>
                            <th>Payment States </th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$order->id}}</td>
                            <td>{{$order->customer->name.'('.$order->customer->mobile.')'}}</td>
                            <td>{{$order->order_status}}</td>
                            <td>{{$order->order_dete}}</td>
                            <td>{{$order->payment_method == 1 ? 'Cash on Delivery' : 'online payment'}}</td>
                            <td>{{$order->payment_status}}</td>
                            <td>
                                <a href="{{route('admin-order.detail',['id'=>$order->id])}}" class="btn btn-primary" title="View Order Detail">
                                    <i class="fa fa-book-open"></i>
                                </a>
                                <a href="{{route('admin-order.view-invoice',['id'=>$order->id])}}" class="btn btn-info" title="Download  Order Invoice">
                                    <i class="fa fa-sms"></i>
                                </a>
                                <a href="{{route('admin-order.download-invoice',['id'=>$order->id])}}" class="btn btn-success" title="View Order Invoice">
                                <i class="fa fa-download"></i>
                                </a>
                                <a href="{{route('admin-order.edit',['id'=>$order->id])}}" class="btn btn-primary" title="Edit Order ">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('admin-order.delete',['id'=>$order->id])}}" class="btn btn-danger" onclick="return comfirm('are you sure to delete..')" title="delete">
                                <i class="fa fa-trash"></i>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    </section>
@endsection

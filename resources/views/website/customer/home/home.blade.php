@extends('website.master')
@section('body')

    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-title">My Dashboard</h1></div>
        </div>
    </div>

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
              <div class="col-md-3">
                  <div class="card card-body">
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item"><a href="">My Profile</a></li>
                          <li class="list-group-item"><a href="">My Order</a></li>
                          <li class="list-group-item"><a href="">My Account</a></li>
                          <li class="list-group-item"><a href="">Change Password</a></li>

                      </ul>
                  </div>
              </div>
              <div class="col-md-9">
                      <div class="card-body">Recent Order</div>
                      <div class="card-body">
                          <table class="table table-bordered table-hover">
                              <thead>
                              <tr>
                               <th>Sl No</th>
                               <th>Order No</th>
                               <th>Order Total</th>
                               <th>Order Date</th>
                               <th>Order Status</th>
                               <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($orders as $order )
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$order->id}}</td>
                                  <td>{{$order->order_total}}</td>
                                  <td>{{$order->order_date}}</td>
                                  <td>{{$order->order_status}}</td>
                                  <td>
                                      <a href="">Edit</a>
                                      <a href="">Delete</a>
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





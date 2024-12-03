@extends('website.master')
@section('body')

    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-title">Login Form</h1></div>
        </div>
    </div>

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card ">
                        <div class="card-header">Login Form</div>
                        <div class="card-body">
                            <h3 class="text-center">{{Session::get('message')}}</h3>
                            <form action="{{route('customer.signin')}}" method="post">
                                @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="btn" value="login"/>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection




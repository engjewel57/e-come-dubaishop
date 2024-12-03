@extends('website.master')
@section('body')

    <div class="page section-header text-center">
        <div class="page-title">
            <div class="wrapper"><h1 class="page-title">Register Form</h1></div>
        </div>
    </div>

    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card ">
                        <div class="card-header">Login Form</div>
                        <div class="card-body">
                            <form action="{{route('new.customer')}}" method="post">
                                @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
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
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="mobile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="btn" value="register"/>
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




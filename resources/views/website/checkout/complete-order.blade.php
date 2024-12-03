@extends('website.master')
@section('body')

        <div class="page section-header text-center">
            <div class="page-title">
                <div class="wrapper"><h1 class="page-title">complete Order</h1></div>
            </div>
        </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                     <h1>{{Session::get('message')}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



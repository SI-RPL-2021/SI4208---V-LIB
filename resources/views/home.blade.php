@extends('layouts.admin')

@section('main-content')

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Dashboard') }}</h1>

    @if (session('success'))
    <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success border-left-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="row">

            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <h4>Lorem Ipsum Dolor Sit Amet</h4>
                        <p style="text-align: justify;">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Ullam nostrum modi at officia dolor deserunt consequuntur 
                        vel repellendus quasi, maxime cumque esse qui in 
                        laboriosam blanditiis, nesciunt doloribus! Doloremque, molestiae?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Ullam nostrum modi at officia dolor deserunt consequuntur 
                        vel repellendus quasi, maxime cumque esse qui in 
                        laboriosam blanditiis, nesciunt doloribus! Doloremque, molestiae?
                        </p>
                    </div>
                    <div class="col-sm-5">
                        <center><img style="width: 40%" src="{{asset('img/illus1.png')}}" alt=""></center>
                    </div>
                </div>
            </div>
    </div>

@endsection

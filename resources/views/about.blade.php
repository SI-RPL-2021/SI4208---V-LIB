@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('About') }}</h1>

    <div class="row">
        <div class="col-md-6">
            <h3>What is V-Lib?</h3>
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
            <h3>What can I search on V-Lib?</h3>
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
        <div class="col-md-6">
            <img style="width: 60%;" src="{{ asset('img/vlib.png') }}" alt="">
        </div>
    </div>

    @endsection
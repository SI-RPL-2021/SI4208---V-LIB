@extends('layouts/app')
    
    @section('title', 'About')
    
    @section('content')

    
    <div class="row" style="margin-left: 150px; margin-top: 100px">
        <div class="col-md-6" style="">
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
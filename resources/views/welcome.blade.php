@extends('layouts/app')
    
    @section('title', 'Home')
    
    @section('content')

    <!-- carousel -->
    <center><div style="margin-top: 100px" id="caro" class="carousel slide" data-ride="carousel">

    <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img style="width: 90%;" src="{{asset('img/1.png')}}" alt="1">
            </div>
            <div class="carousel-item">
                <img style="width: 90%;" src="{{asset('img/2.png')}}" alt="2">
            </div>
            <div class="carousel-item">
                <img style="width: 90%;" src="{{asset('img/3.png')}}" alt="3">
            </div>
        </div>
    <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#caro" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#caro" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div></center>

    <div class="container" style="margin-top: 100px;">
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

    @endsection
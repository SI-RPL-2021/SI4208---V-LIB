@extends('layout/main')
    
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

    @endsection
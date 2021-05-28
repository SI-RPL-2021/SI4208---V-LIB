@extends('layouts/app')
    
    @section('title', 'Catalog')
    
    @section('content')

    
    <div class="container" style="margin-top: 40px;">
            @if($books->count() > 0)
                <h3 style="text-align: center;">List of Books</h3>
                <a href="/addBooks" style="margin-top: 20px;" type="submit" class="btn btn-dark">Add Books</a>
                <div class="card-deck">
                    @foreach( $books as $book )
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="vlib.png" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">{{ $book->title }}</h4>
                                <p class="card-text">{{ $book->year }}</p>
                                <p class="card-text">{{ $book->author }}</p>
                                <p class="card-text">{{ $book->description }}</p>
                                <a href="#" class="btn btn-primary">See Profile</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <center>
                    <h3 style="text-align: center;">List of Books</h3>
                    <p style="margin-top: 20px;">There is no Data ...</p>
                    <a href="/addBooks" style="margin-top: 10px;" type="submit" class="btn btn-dark">Add Books</a>
                </center>
            @endif
        </div>

    @endsection
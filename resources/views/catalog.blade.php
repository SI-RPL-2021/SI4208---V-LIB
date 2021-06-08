@extends('layouts/app')
    
    @section('title', 'Catalog')
    
    @section('content')

    
    <div class="container" style="margin-top: 40px;">
            @if($books->count() > 0)
                <h3 style="text-align: center;">List of Books</h3>
                <div class="card-deck" style='margin-top: 50px;'>
                    @foreach( $books as $book )
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="{{ $book->image }}" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title">{{ $book->title }}</h4>
                                <p class="card-text">{{ $book->year }}</p>
                                <p class="card-text">{{ $book->author }}</p>
                                <p class="card-text">{{ $book->description }}</p>
                                <p class="card-text">
                                    @if ($book->price == null)
                                        <p><strong>Free</strong></p>
                                    @else
                                        <p class="card-text"><strong>Rp. {{ $book->price }}</strong></p>
                                    @endif
                                </p>
                                <a href="/book/{{ $book -> id }}" class="btn btn-success">See Book</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <center>
                    <h3 style="text-align: center;">List of Books</h3>
                    <p style="margin-top: 20px;">There is no Data ...</p>
                    <a href="/books/addBooks" style="margin-top: 10px;" type="submit" class="btn btn-success">Add Books</a>
                </center>
            @endif
        </div>

    @endsection
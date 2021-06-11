@extends('layouts/app')

@section('title', 'Catalog')

@section('content')
<div class="container" style="margin-top: 40px;">
    <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $books as $book )
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->year }}</td>
                    <td>
                        @if ($book->price == null)
                        <strong>Free</strong>
                        @else
                        Rp. {{ $book->price }}
                        @endif
                    </td>
                    <td>
                        @guest
                        <a href="{{ route('login') }}" style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" class="btn btn-success">See Book</a>
                        @else
                        <a href="/book/{{ $book -> id }}" style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" class="btn btn-success">See Book</a>
                        @endguest
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<!-- <div class="container" style="margin-top: 40px;">
    @if($books->count() > 0)
    <h3 style="text-align: center;">List of Books</h3>
    <div class="card-deck" style='margin-top: 50px;'>
        @foreach( $books as $book )
        <div class="card" style="width:400px">
            <img class="card-img-top" src='{{asset("public/$book->image")}}' alt="Card image">
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
                @guest
                <a href="{{ route('login') }}" style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" class="btn btn-success">See Book</a>
                @else
                <a href="/book/{{ $book -> id }}" style="color: #fafafa; border: 0px solid  #1cc88a; border-radius: 60px; padding: 10px; padding-left: 20px; padding-right: 20px; background-color:  #1cc88a;" class="btn btn-success">See Book</a>
                @endguest
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
</div> -->

@endsection
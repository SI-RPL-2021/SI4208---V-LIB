@extends('layouts/app')
    
    @section('title', 'Catalog')
    
    @section('content')

    
    <div class="container" style="margin-top: 40px;">
            @if($books->count() > 0)
                <h3 style="text-align: center;">List of Books</h3>
                <a href="/" style="margin-top: 20px;" type="submit" class="btn btn-dark">Add Books</a>
                <table class="table" style="margin-top: 10px;">
                    <thead class="bg-dark text-light">
                        <th>#</th>
                        <th style="width: 600px">Title</th>
                        <th>Year</th>
                        <th>Author</th>
                        <th>Description</th>
                    </thead>
                    <tbody>
                        @foreach( $books as $book )
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->description }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <center>
                    <h3 style="text-align: center;">List of Books</h3>
                    <p style="margin-top: 20px;">There is no Data ...</p>
                    <a href="/" style="margin-top: 10px;" type="submit" class="btn btn-dark">Add Books</a>
                </center>
            @endif
        </div>

    @endsection
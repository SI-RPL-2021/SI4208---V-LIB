@extends('layouts.app')

@section('title', 'Details')

@section('content')

        <div class="container" style="margin-top: 40px;">
            <h3 style="text-align: center;">Details Books</h3>
            <div class="row" style="margin-left: 300px; margin-top: 40px;">
                <div class="col-xl-4">
                    <img style="width: 80%;" src="" alt="">
                </div>
                <div class="col-xl-8">
                    <h5>{{ $book -> title }}</h5>
                    <p>{{ $book -> author }}</p>
                    <p>{{ $book -> year }}</p>
                    <p>{{ $book -> description }}</p>
                    @if (Auth::user()->is_admin == 1)
                        <a href="/book/{{ $book -> id }}/editBooks" class="btn btn-success">edit</a>
                        <form action="{{ $book->id }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>

@endsection

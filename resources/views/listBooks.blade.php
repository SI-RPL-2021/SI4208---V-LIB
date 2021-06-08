@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">title</th>
                            <th scope="col">year</th>
                            <th scope="col">author</th>
                            <th scope="col">verified</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $books as $book )
                            <tr> 
                                <th>{{ $book->title }}</th>  
                                <th>{{ $book->year }}</th>
                                <th>{{ $book->author }}</th>
                                <th>
                                    @if($book->verified == 0)
                                        <form action="/book/{{ $book->id }}" method="POST">
                                            @method('patch')
                                            @csrf    
                                            <input type="hidden" class="form-control" name="verified" id="verified" value="1">
                                            <button type="submit" class="btn btn-success">verify</button>
                                    @else
                                        verified
                                    @endif
                                </th>
                                <th>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
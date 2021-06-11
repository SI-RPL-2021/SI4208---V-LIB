@extends('layouts.app')

@section('content')

    @guest
    @if (Route::has('login'))
    
        <script>
            window.location.href = '{{ route("login") }}'; //using a named route
        </script>

    @endif
    
    @else
        @if (session('status'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ session('status') }}
            </div>
        @endif

        <div class="container" style="margin-top: 40px;">
            <h3 style="text-align: center;">Input Books</h3>
            <form action="/book/{{ $book->id }}" method="POST">
                @csrf    
                <div class="form-group">
                    <label for="">Book Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $book->title }}">
                </div>
                <div class="form-group">
                    <label for="">Book Title</label>
                    <input type="text" class="form-control" name="author" id="author" value="{{ $book->author }}">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="price" id="price"  value="{{ $book->price }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{ $book->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="">Year</label>
                    <input type="number" class="form-control" name="year" id="year" value="{{ $book->year }}">
                </div>
                <div class="form-group">
                    <label for="">Borrow Time</label>
                    <input type="number" class="form-control" name="borrowTime" id="borrowTime" value="{{ $book->borrowTime }}">
                </div>
                <!-- <div class="form-group">
                    <label for="image">Image File Input</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div> -->
                <input type="hidden" class="form-control" name="id" id="id" value="{{ $book->id }}">
                <input type="hidden" class="form-control" name="image" id="image" value="{{ $book->image }}">
                <input type="hidden" class="form-control" name="verified" id="verified" value="{{ $book->verified }}">
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>

        </div>
        @endguest
@endsection

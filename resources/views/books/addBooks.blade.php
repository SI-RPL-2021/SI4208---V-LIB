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
            <form action="/books/addBooks" method="POST">
                @csrf  
                <div class="form-group">
                    <label for="">Book Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Ex: Modul Praktikum WAD 2021">
                </div>
                <div class="form-group">
                    <label for="">Book Title</label>
                    <input type="text" class="form-control" name="author" id="author" placeholder="Ex: Lab EAD">
                </div>
                <div class="form-group">
                    <label for="">Price</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="price" id="price"  placeholder="500000, if free empty the price">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Year</label>
                    <input type="number" class="form-control" name="year" id="year" placeholder="Ex: 2021">
                </div>
                <div class="form-group">
                    <label for="">Borrow Time</label>
                    <input type="number" class="form-control" name="borrowTime" id="borrowTime" placeholder="Ex: 2, in weeks">
                </div>
                <div class="form-group">
                    <label for="image">Image File Input</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>

        </div>
        @endguest
@endsection

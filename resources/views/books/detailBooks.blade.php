@extends('layouts.app')

@section('title', 'Details')

@section('content')

<div class="container" style="margin-top: 40px;">
    <h3 style="text-align: center;">Details Books</h3>
    <div class="row" style="margin-left: 300px; margin-top: 40px;">
        <div class="col-xl-4">
            <img style="width: 80%;" src='{{asset("public/$book->image")}}' alt="">
        </div>
        <div class="col-xl-8">
            <h5>{{ $book -> title }}</h5>
            <p>{{ $book -> author }}</p>
            <p>{{ $book -> year }}</p>
            <p>{{ $book -> description }}</p>

            <form action="{{route('borrowBook',$book -> id)}}" method="POST" class="d-inline">
                @csrf
                <input type="hidden" name="id_buku" value="{{$book -> id}}">
                <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                <div class="quantity-control" data-quantity="">
                    <a class="quantity-btn" data-quantity-minus=""><svg viewBox="0 0 409.6 409.6">
                            <g>
                                <g>
                                    <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
                                </g>
                            </g>
                        </svg></a>
                    <input type="number" class="quantity-input" data-quantity-target="" value="1" step="1" min="1" max="" name="buyer_quantity">
                    <a class="quantity-btn" data-quantity-plus=""><svg viewBox="0 0 426.66667 426.66667">
                            <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" />
                        </svg>
                    </a>
                </div>
                <p>Days</p>
                <button type="submit" class="btn btn-danger">Borrow</button>
            </form>



            <form action="/buyBook/{{ $book -> id }}" method="POST" class="d-inline">
                @csrf
                <input type="hidden" name="id_buku" value="{{$book -> id}}">
                <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                <button type="submit" class="btn btn-danger">Buy</button>
            </form>




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
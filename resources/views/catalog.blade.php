<<<<<<< HEAD
@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Catalog') }}</h1>

    <p>no entry found</p>
    <div>
        
        <table>
            @foreach( $catalog as $ctg )
            <tr>
                <td>{{ $ctg -> judul }}</td>
                <td>{{ $ctg -> pengarang }}</td>
                <td>{{ $ctg -> tahun }}</td>
                <td>{{ $ctg -> kategori }}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <!-- Main Content goes here -->


    <!-- End of Main Content -->
@endsection

@push('notif')
@if (session('success'))
<div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('status'))
    <div class="alert alert-success border-left-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@endpush
=======
@extends('layouts/app')
    
    @section('title', 'Catalog')
    
    @section('content')

    
    <div class="row" style="margin-left: 150px; margin-top: 150px">
        <div class="col-md-6" style="">
        <h3>What is V-Lib?</h3>
            <p style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Ullam nostrum modi at officia dolor deserunt consequuntur 
                    vel repellendus quasi, maxime cumque esse qui in 
                    laboriosam blanditiis, nesciunt doloribus! Doloremque, molestiae?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Ullam nostrum modi at officia dolor deserunt consequuntur 
                    vel repellendus quasi, maxime cumque esse qui in 
                    laboriosam blanditiis, nesciunt doloribus! Doloremque, molestiae?
            </p>
            <h3>What can I search on V-Lib?</h3>
            <p style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Ullam nostrum modi at officia dolor deserunt consequuntur 
                    vel repellendus quasi, maxime cumque esse qui in 
                    laboriosam blanditiis, nesciunt doloribus! Doloremque, molestiae?
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                    Ullam nostrum modi at officia dolor deserunt consequuntur 
                    vel repellendus quasi, maxime cumque esse qui in 
                    laboriosam blanditiis, nesciunt doloribus! Doloremque, molestiae?
            </p>
        </div>
        <div class="col-md-6">
            <img style="width: 60%;" src="{{ asset('img/vlib.png') }}" alt="">
        </div>
    </div>
    

    @endsection
>>>>>>> krisnadp

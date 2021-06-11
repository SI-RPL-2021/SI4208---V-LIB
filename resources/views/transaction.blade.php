@extends('layouts/app')

@section('title', 'Transaction')

@section('content')
<div class="container" style="margin-top: 40px;">
    <div class="table-responsive">
        <table class="table table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Jenis Transaksi</th>
                    <th>Lama Pinjam</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Admin -->
                @if(Auth::user()->is_admin == 1)
                @foreach($transaction as $tc)
                <tr>
                    <td>
                        @foreach($books as $bk)
                        @if($bk->id == $tc->id_buku)
                        {{$bk->title}}
                        @endif
                        @endforeach
                    </td>
                    <td>{{$tc->jenis_transaksi }}</td>
                    <td>
                        @if($tc->jenis_transaksi == "beli")
                        -
                        @else
                        {{$tc->lama_pinjam}}
                        @endif
                    </td>
                    <td>
                        <a href="" class="btn btn-success">Read</a>
                    </td>
                </tr>
                @endforeach

                <!-- User -->
                @else
                @foreach($transaction as $tc)
                @if($tc->id_user == Auth::user()->id)
                <tr>
                    <td>
                        @foreach($books as $bk)
                        @if($bk->id == $tc->id_buku)
                        {{$bk->title}}
                        @endif
                        @endforeach
                    </td>
                    <td>{{$tc->jenis_transaksi }}</td>
                    <td>
                        @if($tc->jenis_transaksi == "beli")
                        -
                        @else
                        {{$tc->lama_pinjam}}
                        @endif
                    </td>
                    <td>
                        <a href="" class="btn btn-success">Read</a>
                    </td>
                </tr>
                @endif
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
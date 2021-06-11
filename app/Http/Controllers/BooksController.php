<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\transactions;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function catalog()
    {
        $books = book::all();
        return view('catalog', ['books' => $books]);
    }

    public function transaction()
    {
        $transaction = transactions::all();
        $books = book::all();
        return view('transaction', ['transaction' => $transaction], ['books' => $books]);
    }

    public function listBooks()
    {
        $books = book::all();
        return view('listBooks', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(book $books)
    {
        return view('/books/addBooks', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($files = $request->file('image')) {
            $destinationPath = 'public/images/';
            $file = $request->file('image');
            $profileImage = rand(1000, 2000000) . "." .
            $files->getClientOriginalExtension();
            $pathImg = $file->storeAs('images', $profileImage);
            $files->move($destinationPath, $profileImage);
        }

        $books = new book;
        $books->title = $request->title;
        $books->price = $request->price;
        $books->author = $request->author;
        $books->description = $request->description;
        $books->year = $request->year;
        $books->borrowTime = $request->borrowTime;
        $books->image = $pathImg;
        
        $books->save();

        return redirect('/books/addBooks')->with('status', 'Books has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('/books/detailBooks', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('books/editBooks', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $books = Book::find($request->id);
        $books->title = $request->title;
        $books->price = $request->price;
        $books->author = $request->author;
        $books->description = $request->description;
        $books->year = $request->year;
        $books->borrowTime = $request->borrowTime;
        $books->image = $request->image;
        $books->verified = $request->verified;
        $books->save();
        return redirect('/catalog')->with('status', 'Books has been updated!');
    }

    public function verified(Request $request, Book $book)
    {
        Book::where('id', $book->id)
            ->update([
                'verified' => $request->verified
            ]);
        return redirect('/listBooks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/catalog');
    }

    public function borrow(Request $request)
    {
        $trasactions = new transactions();
        $trasactions->id_buku = $request->id_buku;
        $trasactions->id_user = $request->id_user;
        $trasactions->jenis_transaksi  = "pinjam" ;
        $trasactions->lama_pinjam  = $request->buyer_quantity;
        $trasactions->save();
        return redirect('/catalog');
    }

    public function buy(Request $request)
    {
        $trasactions = new transactions();
        $trasactions->id_buku = $request->id_buku;
        $trasactions->id_user = $request->id_user;
        $trasactions->jenis_transaksi  = "beli" ;
        $trasactions->save();
        return redirect('/catalog');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
        $books = new book;
        $books->title = $request->title;
        $books->price = $request->price;
        $books->author = $request->author;
        $books->description = $request->description;
        $books->year = $request->year;
        $books->borrowTime = $request->borrowTime;

        // if($request->hasFile('image')) {
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $image = time() . '.' . $extension;
        //     $file->move('public/img', $filename);
        //     $books->image = $image;
        // } else {
        //     return $request;
        //     $books->image = '';
        // }

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
    public function update(Request $request, Book $book)
    {
        Book::where('id', $book->id)
                ->update([
                    'title' => $request->title,
                    'price' => $request->price,
                    'author' => $request->author,
                    'description' => $request->description,
                    'year' => $request->year,
                    'borrowTime' => $request->borrowTime
                    ]);
        return redirect('/catalog');
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
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view ('page.book.index', ['book' => $book]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('page.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //     $book = new Book;
    //     $book->code = $request->code;
    //     $book->title = $request->title;
    //     $book->publisher = $request->publisher;
    //     $book->author = $request->author;

    //    $book->save();
    //    return redirect('/book')->with('status', 'Buku berhasil Ditambahkan!');
       
       $request->validate([
        'code' => 'required',
        'title' => 'required',
        'publisher' => 'required',
        'author' => 'required',
        'stock' => 'required',
        'price' => 'required'
        ]);
        
        Book::create($request->all());
        return redirect('/book')->with('status', 'Buku berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('page.book.edit', compact('book'));
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
        $request->validate([
            'code' => 'required',
            'title' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'stock' => 'required',
            'price' => 'required'
        ]);

        Book::where('id', $book->id)
            ->update([
                'code' => $request->code,
                'title' => $request->title,
                'publisher' => $request->publisher,
                'author' => $request->author,
                'stock' => $request->stock,
                'price' => $request->price
            ]);
            return redirect('/book')->with('status', 'Data buku Berhasil Diedit!');
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
        return redirect('/book')->with('status', 'Data Buku Berhasil Dihapus!');
    }
}

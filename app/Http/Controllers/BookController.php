<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $allBooks= Book::all();
        $allBooks= Book::paginate(7);
        return view('books.index')->with('allbooks',$allBooks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('books.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $rules=[
        "title"=>'required|alpha:ascii|max:255',
        "author"=>'required|max:255|alpha:ascii',
        "isbn"=>'required|size:13',
        "stock"=>'required|numeric|integer|gte:0',
        "price"=>'required|gte:20|'
        ];

        $request->validate($rules);

        $book=Book::create($request->all());

        return redirect()->route('books.show',$book->id);
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $b=Book::find($id);
        return view('books.show')->with('book',$b);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book,$id)
    {
        //
        $book= Book::find($id);
        $book->delete();

        return redirect()->route('books.home');


    }
}

<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::get();
        return view('home', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $image = $request->file('image');
        $fileName = time()."-".$image->getClientOriginalName();
        $image->move('img/book_image', $fileName);
        $book = new Book;
        $book->title = $request->title;
        $book->category_id = $request->category_id;
        $book->author_id = $request->author_id;
        $book->publisher_id = $request->publisher_id;
        $book->stock = $request->stock;
        $book->price = $request->price;
        $book->image = "/img/book_image/".$fileName;
        $book->save();
        return new BookResource($book);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return BookResource::collection($book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        unlink($book->image);
        $image = $request->file('image');
        $fileName = time()."-".$image->getClientOriginalName();
        $image->move('img/book_image', $fileName);
        $book->title = $request->title;
        $book->category_id = $request->category_id;
        $book->author_id = $request->author_id;
        $book->publisher_id = $request->publisher_id;
        $book->stock = $request->stock;
        $book->price = $request->price;
        $book->image = "/img/book_image/".$fileName;
        $book->save();
        return new BookResource($book);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        unlink($book->image);
        $book->delete();
        return new BookResource($book);
    }
}

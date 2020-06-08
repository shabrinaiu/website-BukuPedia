<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\BookCategory;
use App\Http\Resources\BookResource;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Publisher;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('sold', 'desc')->limit(4)->get();
        $allBooks = Book::paginate(8);
        return view('home', ['books' => $books, 'allBooks' => $allBooks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BookCategory::get();
        $authors = Author::get();
        $publishers = Publisher::get();
        return view('admin/create-product', [
            'categories' => $categories,
            'authors' => $authors,
            'publishers' => $publishers
        ]);
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
        $book->description = $request->description;
        $book->category_id = $request->category_id;
        $book->author_id = $request->author_id;
        $book->publisher_id = $request->publisher_id;
        $book->stock = $request->stock;
        $book->sold = 0;
        $book->price = $request->price;
        $book->image = $fileName;
        $book->save();
        return redirect('/admin/product-tables');
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
        return view('store.product', ['book' => $book]);
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
        $book->description = $request->description;
        $book->category_id = $request->category_id;
        $book->author_id = $request->author_id;
        $book->publisher_id = $request->publisher_id;
        $book->stock = $request->stock;
        $book->price = $request->price;
        $book->image = $fileName;
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
        unlink(public_path('img/book_image/'.$book->image));
        $book->delete();
        return redirect('/admin/product-tables');
    }

    /**
     * Access book through admin
     */
    public function adminIndex(){
        $books = Book::paginate(6);
        return view('admin.product-tables', ['books' => $books]);
    }

    /**
     * Add Quantity
     */
    public function addQuantity($id){
        $book = Book::findOrFail($id);
        $book->stock++;
        $book->save();
        return redirect('/admin/product-tables');
    }

    /**
     * Remove Quantity
     */
    public function removeQuantity($id){
        $book = Book::findOrFail($id);
        if($book->stock != 0)
            $book->stock--;
        $book->save();
        return redirect('/admin/product-tables');
    }
}

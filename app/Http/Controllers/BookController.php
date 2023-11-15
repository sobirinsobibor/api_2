<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('book', [
            'books' => $books
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book_detail', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }

    // public function getByCategory($category)
    // {
    //     try{
    //         $booksByCategory = Book::select([
    //             'books.id', 'title', 'price', 'books.created_at', 'editor_name', 'name as author_name', 'book_category_name'
    //         ])->join('editors', 'books.id_editor', '=', 'editors.id')
    //           ->join('users', 'books.id_user', '=', 'users.id')
    //           ->join('book_categories', 'books.id_book_category', '=', 'book_categories.id')
    //           ->where('books.id_book_category', '=', $category)
    //           ->get();
    
    //         return view('book', [
    //             'books' => $booksByCategory
    //         ]);
    //         }catch(\Exception $e){
    //         return response()->json($e->getMessage());
    //     }
    // }

    // public function getByEditor($editor){
    //     try{
    //         $booksByEditor = Book::select([
    //             'books.id', 'title', 'price', 'books.created_at', 'editor_name', 'name as author_name', 'book_category_name'
    //         ])->join('editors', 'books.id_editor', '=', 'editors.id')
    //           ->join('users', 'books.id_user', '=', 'users.id')
    //           ->join('book_categories', 'books.id_book_category', '=', 'book_categories.id')
    //           ->where('books.id_editor', '=', $editor)
    //           ->get();
            
    //         return view('book', [
    //             'books' => $booksByEditor
    //         ]);

    
    //     }catch(\Exception $e){
    //         return response()->json($e->getMessage());
    //     }
    // }

    // public function getByAuthor($author){
    //     try{
    //         $booksByAuthor = Book::select([
    //             'books.id', 'title', 'price', 'books.created_at', 'editor_name', 'name as author_name', 'book_category_name'
    //         ])->join('editors', 'books.id_editor', '=', 'editors.id')
    //           ->join('users', 'books.id_user', '=', 'users.id')
    //           ->join('book_categories', 'books.id_book_category', '=', 'book_categories.id')
    //           ->where('books.id_user', '=', $author)
    //           ->get();
    
    //           return view('book', [
    //             'books' => $booksByAuthor
    //         ]);
    //     }catch(\Exception $e){
    //         return response()->json($e->getMessage());
    //     }
    // }

}

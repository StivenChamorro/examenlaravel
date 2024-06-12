<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

        $books = Book::orderBy('id', 'desc')->get();
        return view('book.listar', compact('books'));
        //return  $cursos;
    }

    public function create(){
        return view('book.create');
    }

   

    public function store(Request $request){
        
        $book= new Book();
        $book->title=$request->title;
        $book->isbn=$request->isbn;
        $book->editorial=$request->editorial;
        $book->pages=$request->pages;
        $book->save();
        return $book;
    }

    public function show(Book $book) {

        return view('book.show', compact('book'));
    }

    public function edit (Book $book){

        return view('book.edit',compact('book'));

    }

    public function update(Request $request,Book $book ){

        $book->title=$request->title;
        $book->isbn=$request->isbn;
        $book->editorial=$request->editorial;
        $book->pages=$request->pages;
        $book->save();
        return redirect()->route('book.index');

    }

    public function destroy(Book $book) {
        $book->delete();
        return redirect()->route('book.index');
    }
}

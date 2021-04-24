<?php
  // file: controllers/BookController.php

  require_once('Book.php');

  class BookController extends Controller {

    public function index() {  
      return view('Book/index',
       ['books'=>Book::all(),
        'title'=>'Books List']);
    }

    public function show($id) {
      $bo = Book::find($id);
      return view('Book/show',
        ['book'=>$bo,
         'title'=>'Book Detail']);
    }
  }
?>
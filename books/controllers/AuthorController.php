<?php
  // file: controllers/AuthorController.php

  require_once('Author.php');

  class AuthorController extends Controller {

    public function index() {  
      return view('author/index',
       ['authors'=>Author::all(),
        'title'=>'Authors List']);
    }

    public function show($id) {
      $aut = Author::find($id);
      return view('author/show',
        ['author'=>$aut,
         'title'=>'Author Detail']);
    }
  }
?>
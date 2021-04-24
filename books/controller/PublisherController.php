<?php
  // file: controllers/PublisherController.php

  require_once('Publisher.php');

  class PublisherController extends Controller {

    public function index() {  
      return view('Publisher/index',
       ['publishers'=>Publisher::all(),
        'title'=>'Publisher List']);
    }

    public function show($id) {
      $pub = Publisher::find($id);
      return view('Publisher/show',
        ['publisher'=>$pub,
         'title'=>'Publisher Detail']);
    }
  }
?>
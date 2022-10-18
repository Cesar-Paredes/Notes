<?php

  Class Notes extends Controllers{
    public function __construct(){

    }

    public function index(){

      //we start a session with the class Auth
      $auth = new Auth();
      $auth->startSession();

      //calls the view() methos in the Controller class
      $this->view('Notes/note_view');

    }

  }
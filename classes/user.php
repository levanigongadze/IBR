<?php
include_once 'classes/template.php';
include_once 'classes/database.php';

class User {
  public function register() {
    Template::view('register');
  }

  public function login() {
    Template::view('login');
  }
}

<?php

class Database {
  public function connect() {
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'oop');
    $this->connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);
    if ($this->connection->connect_error) die('Database error -> ' . $this->connection->connect_error);
  }

  public function select() {
    //select
  }

  public function remove() {
    //remove
  }

  public function update() {
    //update
  }

  public function insert() {
    //insert
  }
}

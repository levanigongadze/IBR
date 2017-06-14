<?php

class Template {
  public function view($view) {
    include 'views/header.php';
    include 'views/'.$view.'.php';
    include 'views/footer.php';
  }
}

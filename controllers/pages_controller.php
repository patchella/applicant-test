<?php
  class PagesController {
    public function home() {
      $first_name = 'Summer';
      $last_name  = 'Breezer';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>
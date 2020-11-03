<?php
  class Database {
    public $con;
    public function __construct(){
        try {
            // Development
            $this -> con = mysqli_connect("localhost", "root", "", internship);
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
  }
  
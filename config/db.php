<?php
  class Database {
    public $con;
    public function __construct(){
        try {
            $this -> con = mysqli_connect("localhost", "root", "", "internship");
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
  }
  
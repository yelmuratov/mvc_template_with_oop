<?php
    namespace App\Controllers;

    class CategoryController{
        public function index(){
            include realpath(__DIR__ . "/../Views/students/index.php");
        }

        public function products(){
            include realpath(__DIR__ . "/../Views/products/index.php");
        }
    }   
?>
<?php
    namespace App\Controllers;
    use App\Models\Product\Product;
    use App\Models\Student\Student;

    class CategoryController{
        public function index(){
            include realpath(__DIR__ . "/../Views/students/index.php");
        }

        public function products(){
            include realpath(__DIR__ . "/../Views/products/index.php");
        }
    }   
?>
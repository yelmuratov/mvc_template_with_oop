<?php
    namespace App\Controllers;
    use App\Models\Product\Product;
    use App\Models\Student\Student;

    class CategoryController{
        public function index(){
            include realpath(__DIR__ . "/../Views/index.php");
        }

        public function students(){
            include realpath(__DIR__ . "/../Views/students/index.php");
        }

        public function products(){
            include realpath(__DIR__ . "/../Views/products/index.php");
        }

        public function product_create(){
            include realpath(__DIR__ . "/../Views/products/create.php");
        }

        public function student_create(){
            include realpath(__DIR__ . "/../Views/students/create.php");
        }

        public function save_student(){
            Student::create([
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'phone' => $_POST['phone']
            ]);
        }

        public function save_product(){
            Product::create([
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity']
            ]);
        }
    }   
?>
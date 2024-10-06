<?php
    namespace App\Controllers;
    use App\Models\Product\Product;
    use App\Models\Student\Student;

    session_start();

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
            try{
                Student::create([
                    'name' => $_POST['name'],
                    'surname' => $_POST['surname'],
                    'major' => $_POST['major']
                ]);
                $_SESSION['student_create'] = 'Student created successfully';
                ?>
                <script>
                    window.location.href = history.back();
                </script>
                <?php
            }catch(\Exception $e){
                echo $e->getMessage();
            }
        }

        public function save_product(){
            Product::create([
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'count' => $_POST['count']
            ]);
            $_SESSION['product_create'] = 'Product created successfully';
            ?>
            <script>
                window.location.href = history.back();
            </script>
            <?php
        }
    }   
?>
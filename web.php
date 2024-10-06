<?php
    use App\Routes\Route;
    use App\Controllers\CategoryController;

    Route::get('/',[CategoryController::class,'index']);
    Route::get('/products',[CategoryController::class,'products']);
?>
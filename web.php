<?php
    use App\Routes\Route;
    use App\Controllers\CategoryController;

    Route::get('/',[CategoryController::class,'index']);
    Route::get('/students',[CategoryController::class,'students']);
    Route::get('/products',[CategoryController::class,'products']);
    Route::get('/product_create',[CategoryController::class,'product_create']);
    Route::get('/student_create',[CategoryController::class,'student_create']);
    Route::post('/create_st',[CategoryController::class,'save_student']);
    Route::post('/create_pr',[CategoryController::class,'save_product']);
?>
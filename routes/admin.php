
<?php

use App\Http\Controllers\Admin\adminAuthController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\Users\userAccessController;
use App\Http\Controllers\Category\categoryController;
use App\Http\Controllers\Products\productController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::middleware('guest:admin')->group(function () {
    Route::get('/login', [adminAuthController::class, 'index'])->name('admin.getLogin');
    Route::post('/login', [adminAuthController::class, 'login'])->name('admin.login');
});

Route::middleware('auth:admin')->group(function () {

    // --------------------- main page home --------------------//
    Route::get('/', [adminController::class, 'index'])->name('admin.home');
    Route::get('/home', [adminController::class, 'index'])->name('admin.home');

    // --------------------- User Access -----------------------//
    Route::get('/Admin-AllUsers', [userAccessController::class, 'index'])->name('admin.allUsers');
    Route::get('/Admin-AddUser', [userAccessController::class, 'getAddUser'])->name('admin.addUser');
    Route::get('Admin-DeleteUser/{id}', [userAccessController::class, 'destroy'])->name('admin.deleteUser');
    Route::get('/Admin-GetEditUser/{id}', [userAccessController::class, 'getEditUser'])->name('admin.getEditUser');
    Route::post('/Admin-AddUser', [userAccessController::class, 'store'])->name('admin.addNewUser');
    Route::post('/Admin-EditUser/{id}', [userAccessController::class, 'editUser'])->name('admin.edituser');

    // --------------------- Category Access ------------------//
    Route::get('/Admin-AllCategories', [categoryController::class, 'index'])->name('admin.allCategories');
    Route::get('/Admin-AddCategory', [categoryController::class, 'getAddCategory'])->name('admin.getAddCategory');
    Route::get('Admin-DeleteCategory/{id}', [categoryController::class, 'destroy'])->name('admin.DeleteCategory');
    Route::get('/Admin-GetEditCategory/{id}', [categoryController::class, 'getEditCategory'])->name('admin.getEditCategory');
    Route::get('/Admin-DeleteAllCategories', [categoryController::class, 'destroyAll'])->name('admin.deleteAllCategories');
    Route::post('/Admin-editCategory/{id}', [categoryController::class, 'edit'])->name('admin.editCategory');
    Route::post('/Admin-AddCategory', [categoryController::class, 'store'])->name('admin.addCategory');

    // -------------------- Products Access -------------------//
    Route::get('/Admin-AllProducts', [productController::class, 'index'])->name('admin.allProducts');
    Route::get('/Admin-AddProducts', [productController::class, 'getAddProduct'])->name('admin.addProduct');
    Route::get('/Admin-DeleteProduct/{id}', [productController::class, 'destroy'])->name('admin.deleteProduct');
    Route::get('/Admin-GetEditProduct/{id}', [productController::class, 'getEditProducts'])->name('admin.getEditProduct');
    Route::post('/Admin-EditProduct/{id}', [productController::class, 'edit'])->name('admin.editProduct');
    Route::post('/Admin-AddProducts', [productController::class, 'store'])->name('admin.addProducts');
    Route::post('/Admin-DeleteAllProducts', [productController::class, 'deleteAllProducts'])->name('admin.deleteAllProducts');
});
?>

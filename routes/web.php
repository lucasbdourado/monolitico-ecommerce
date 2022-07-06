<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Autenticator;
use App\Http\Controllers\{
    UserController,
    AdminController,
    ProductController,
    InventoryController,
    CartController,
    PlanController,
    DetailController,
    ProfileController,
    PermissionController
};


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = \App\Models\Product::all();
    $inventories = \App\Models\Inventory::all();

    return view('welcome')->with(['products' => $products, 'inventories' => $inventories]);
})->name('welcome');
Route::prefix('dashboard')->group(function (){
    Route::middleware([Autenticator::class, 'can:admin'])->group(function () {
        Route::get('/', [AdminController::class, 'index'])->name('dashboard.index');

        // USERS
        Route::get('users', [UserController::class, 'list'])->name('users.list');
        Route::get('users/create', [UserController::class, 'add'])->name('users.add');
        Route::post('users', [UserController::class, 'store'])->name('users.store');
        Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
        Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
        Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

        // PRODUTOS
        Route::get('products', [ProductController::class, 'index'])->name('products.index');
        Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
        Route::post('products', [ProductController::class, 'store'])->name('products.store');
        Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

        // INVENTÁRIO
        Route::get('inventories', [InventoryController::class, 'index'])->name('inventories.index');
        Route::get('inventories/create', [InventoryController::class, 'create'])->name('inventories.create');
        Route::post('inventories', [InventoryController::class, 'store'])->name('inventories.store');
        Route::get('inventories/{id}/edit', [InventoryController::class, 'edit'])->name('inventories.edit');
        Route::put('inventories/{id}', [InventoryController::class, 'update'])->name('inventories.update');
        Route::delete('inventories/{id}', [InventoryController::class, 'destroy'])->name('inventories.destroy');

        // PLANOS
        Route::get('plans', [PlanController::class, 'index'])->name('plans.index');
        Route::get('plans/create', [PlanController::class, 'create'])->name('plans.create');
        Route::post('plans', [PlanController::class, 'store'])->name('plans.store');
        Route::get('plans/{id}/edit', [PlanController::class, 'edit'])->name('plans.edit');
        Route::put('plans/{id}', [PlanController::class, 'update'])->name('plans.update');
        Route::delete('plans/{id}', [PlanController::class, 'destroy'])->name('plans.destroy');

        //DETALHES
        Route::get('plans/{id}/details', [DetailController::class, 'index'])->name('details.index');
        Route::get('plans/{id}/details/create', [DetailController::class, 'create'])->name('details.create');
        Route::post('plans/{id}/details', [DetailController::class, 'store'])->name('details.store');
        Route::get('plans/{id}/details/{detail_id}/edit', [DetailController::class, 'edit'])->name('details.edit');
        Route::put('plans/{id}/details/{detail_id}', [DetailController::class, 'update'])->name('details.update');
        Route::delete('plans/{id}/details/{detail_id}', [DetailController::class, 'destroy'])->name('details.destroy');

        //PERFIS
        Route::get('profiles', [ProfileController::class, 'index'])->name('profiles.index');
        Route::get('profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
        Route::post('profiles', [ProfileController::class, 'store'])->name('profiles.store');
        Route::get('profiles/{id}/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
        Route::put('profiles/{id}', [ProfileController::class, 'update'])->name('profiles.update');
        Route::delete('profiles/{id}', [ProfileController::class, 'destroy'])->name('profiles.destroy');
        Route::get('profiles/{id}/permissions', [ProfileController::class, 'show'])->name('profiles.show');

        //PERMISSIONS
        Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
        Route::get('permissions/create', [PermissionController::class, 'create'])->name('permissions.create');
        Route::post('permissions', [PermissionController::class, 'store'])->name('permissions.store');
        Route::get('permissions/{id}/edit', [PermissionController::class, 'edit'])->name('permissions.edit');
        Route::put('permissions/{id}', [PermissionController::class, 'update'])->name('permissions.update');
        Route::delete('permissions/{id}', [PermissionController::class, 'destroy'])->name('permissions.destroy');
        //Route::get('plans/{id}', [PlanController::class, 'show'])->name('plans.show');
    });
});

Route::get('/product/{url}', [ProductController::class, 'show'])->name('products.show');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('cart', [CartController::class, 'store'])->name('cart.store');
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login', [UserController::class, 'authenticate'])->name('signin');
Route::get('/register', [UserController::class, 'create'])->name('create');
Route::post('/register', [UserController::class, 'register'])->name('register');



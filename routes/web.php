<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('index');
});

Route::prefix('users')->group(function () {
  Route::get('/', [UserController::class, "index"])->name("users.index");
  Route::get('/create', [UserController::class, "create"])->name("users.create");
  Route::post('/store', [UserController::class, "store"])->name("users.store");
  Route::get("/edit/{id}", [UserController::class, "edit"])->name("users.edit");
  Route::post("/update/{id}", [UserController::class, "update"])->name("users.update");
  Route::post("/destroy/{id}", [UserController::class, "destroy"])->name("users.destroy");
  Route::get("/{id}/posts", [UserController::class, "posts"])->name("users.posts");
});

Route::prefix('posts')->group(function () {
  Route::get("/", [PostController::class, "index"])->name("posts.index");
  Route::get("/create", [PostController::class, "create"])->name("posts.create");
  Route::post("/store", [PostController::class, "store"])->name("posts.store");
  Route::get("/edit/{id}", [PostController::class, "edit"])->name("posts.edit");
  Route::post("/update/{id}", [PostController::class, "update"])->name("posts.update");
  Route::post("/destroy/{id}", [PostController::class, "destroy"])->name("posts.destroy");
});

Route::prefix('categories')->group(function () {
  Route::get("/", [CategoriesController::class, "index"])->name("categories.index");
  Route::get("/create", [CategoriesController::class, "create"])->name("categories.create");
  Route::post("/store", [CategoriesController::class, "store"])->name("categories.store");
  Route::get("/edit/{id}", [CategoriesController::class, "edit"])->name("categories.edit");
  Route::post("/uppdate/{id}", [CategoriesController::class, "update"])->name("categories.update");
  Route::post("/destroy/{id}", [CategoriesController::class, "destroy"])->name("categories.destroy");
});

Route::prefix('tags')->group(function () {
  Route::get("/", [TagController::class, "index"])->name("tags.index");
  Route::get("/create", [TagController::class, "create"])->name("tags.create");
  Route::post("/store", [TagController::class, "store"])->name("tags.store");
  Route::get("/edit/{id}", [TagController::class, "edit"])->name("tags.edit");
  Route::post("/uppdate/{id}", [TagController::class, "update"])->name("tags.update");
  Route::post("/destroy/{id}", [TagController::class, "destroy"])->name("tags.destroy");
  route::get('/{id}/posts', [TagController::class, "posts"])->name("tags.posts");
});

Route::prefix('permisos')->group(function () {
  Route::get("/", [PermisoController::class, "index"])->name("permisos.index");
  Route::get("/create", [PermisoController::class, "create"])->name("permisos.create");
  Route::post("/store", [PermisoController::class, "store"])->name("permisos.store");
  Route::get("/edit/{id}", [PermisoController::class, "edit"])->name("permisos.edit");
  Route::post("/uppdate/{id}", [PermisoController::class, "update"])->name("permisos.update");
  Route::post("/destroy/{id}", [PermisoController::class, "destroy"])->name("permisos.destroy");
  route::get('/{id}/posts', [PermisoController::class, "posts"])->name("permisos.posts");
});

Route::prefix('roles')->group(function () {
  Route::get("/", [RolController::class, "index"])->name("roles.index");
  Route::get("/create", [RolController::class, "create"])->name("roles.create");
  Route::post("/store", [RolController::class, "store"])->name("roles.store");
  Route::get("/edit/{id}", [RolController::class, "edit"])->name("roles.edit");
  Route::post("/uppdate/{id}", [RolController::class, "update"])->name("roles.update");
  Route::post("/destroy/{id}", [RolController::class, "destroy"])->name("roles.destroy");
  route::get('/{id}/posts', [RolController::class, "posts"])->name("roles.posts");
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;

//ROUTE USERS
Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/a-propos', [UserController::class, 'a_propos'])->name('user.a_propos');
Route::get('/contact', [UserController::class, 'contact'])->name('user.contact');
Route::post('/contact', [MessageController::class, 'store'])->name('user.message');
Route::get('/admin/message/{id}/destroy', [MessageController::class, 'destroy'])->name('message.destroy');
Route::get('/termes', [UserController::class, 'termes'])->name('user.termes');
Route::get('/faq', [UserController::class, 'faq'])->name('user.faq');
Route::get('/tous-produit', [ProduitController::class, 'produit'])->name('user.produit.all');

//ROUTE AUTHENTIFICATION
Route::get('/user/login', [LoginController::class, 'index'])->name('user.login');
Route::post('/user/login', [LoginController::class, 'dologin'])->name('user.dologin');
Route::get('/user/register', [RegisterController::class, 'index'])->name('user.register');
Route::post('/user/register', [RegisterController::class, 'doregister'])->name('user.doregister');
Route::get('/user/logout', [LoginController::class, 'logout'])->name('user.logout');

//ROUTE ADMIN
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/table', [AdminController::class, 'table'])->name('admin.table');

// ROUTE PRODUIT
Route::get('/admin/produit', [ProduitController::class, 'index'])->name('produit.index');
Route::get('/admin/produit/create', [ProduitController::class, 'create'])->name('produit.create');
Route::get('/admin/produit/modifie', [ProduitController::class, 'modifie'])->name('produit.modifie');
Route::post('/admin/produit', [ProduitController::class, 'store'])->name('produit.store');
Route::get('/produit/{id}/show', [ProduitController::class, 'show'])->name('produit.show');
Route::get('/admin/produit/{id}/edit', [ProduitController::class, 'edit'])->name('produit.edit');
Route::patch('/admin/produit/{id}', [ProduitController::class, 'update'])->name('produit.update');
Route::get('/admin/produit/{id}/destroy', [ProduitController::class, 'destroy'])->name('produit.destroy');

// ROUTE CATEORIE
Route::get('/admin/categorie', [CategorieController::class, 'index'])->name('categorie.index');
Route::get('/admin/categorie/create', [CategorieController::class, 'create'])->name('categorie.create');
Route::post('/admin/categorie', [CategorieController::class, 'store'])->name('categorie.store');
Route::get('/admin/categorie/{id}', [CategorieController::class, 'show'])->name('categorie.show');
Route::get('/admin/categorie/{id}/edit', [CategorieController::class, 'edit'])->name('categorie.edit');
Route::patch('/admin/categorie/{id}', [CategorieController::class, 'update'])->name('categorie.update');
Route::get('/admin/categorie/{id}/destroy', [CategorieController::class, 'destroy'])->name('categorie.destroy');

// ROUTE COMMANDE
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');
Route::get('/order/{id}/edit', [OrderController::class, 'edit'])->name('order.edit');
Route::patch('/order/{id}', [OrderController::class, 'update'])->name('order.update');
Route::get('/order/{id}/destroy', [OrderController::class, 'destroy'])->name('order.destroy');

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoriesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;


Route::get('/',[WelcomeController::class, 'welcome']);
Route::get('/welcome-index',[WelcomeController::class, 'welcome_index']);
Route::get('/welcome-edit/{id}',[WelcomeController::class, 'welcome_edit']);
Route::put('/welcome-update/{id}',[WelcomeController::class, 'welcome_update']);



Route::get('/all-blog', [BlogController::class,'all_blog']);
Route::get('/category-wise-blogs/{id}', [BlogController::class,'category_wise_blogs']);
// 
Route::get('/blog',[BlogController::class, 'blog']);
Route::get('/blog-single/{id}',[BlogController::class, 'single']);
Route::get('/blogs',[BlogController::class, 'index']);
Route::get('/blog-create',[BlogController::class, 'create']);
Route::post('/blog-store',[BlogController::class, 'store']);
Route::get('/blog-edit/{id}',[BlogController::class, 'edit']);
Route::put('/blog-update/{id}',[BlogController::class, 'update']);
Route::get('/blog-delete/{id}',[BlogController::class, 'delete']);


Route::get('/categories',[BlogCategoriesController::class, 'categories_index']);
Route::get('/categories-create',[BlogCategoriesController::class, 'categories_create']);
Route::post('/categories-store',[BlogCategoriesController::class, 'categories_store']);
Route::get('/categories-edit/{id}',[BlogCategoriesController::class, 'categories_edit']);
Route::put('/categories-update/{id}',[BlogCategoriesController::class, 'categories_update']);
Route::get('/categories-delete/{id}',[BlogCategoriesController::class, 'categories_delete']);


Route::get('/service',[ServiceController::class, 'service']);
Route::get('/service-detailes/{id}',[ServiceController::class, 'single']);
Route::get('/services',[ServiceController::class, 'index']);
Route::get('/services-create',[ServiceController::class, 'create']);
Route::post('/services-store',[ServiceController::class, 'store']);
Route::get('/services-edit/{id}',[ServiceController::class, 'edit']);
Route::put('/services-update/{id}',[ServiceController::class, 'update']);
Route::get('/services-delete/{id}',[ServiceController::class, 'delete']);


Route::get('/contact',[ContactController::class, 'contact']);
Route::get('/contact-index',[ContactController::class, 'contact_index']);
Route::post('/contacts-store',[ContactController::class, 'store']);
Route::get('/contacts-delete/{id}',[ContactController::class, 'delete']);


Route::get('/settings',[SettingController::class, 'index']);
Route::get('/settings-edit/{id}',[SettingController::class, 'edit']);
Route::put('/settings-update/{id}',[SettingController::class, 'update']);



Route::get('/about',[AboutController::class, 'about']);
Route::get('/about-index',[AboutController::class, 'about_index']);
Route::get('/about-edit/{id}',[AboutController::class, 'about_edit']);
Route::put('/about-update/{id}',[AboutController::class, 'about_update']);

Route::get('/skill-index',[SkillController::class, 'skill_index']);
Route::get('/skill-create',[SkillController::class, 'skill_create']);
Route::post('/skill-store',[SkillController::class, 'skill_store']);
Route::get('/skill-edit/{id}',[SkillController::class, 'skill_edit']);
Route::put('/skill-update/{id}',[SkillController::class, 'skill_update']);
Route::get('/skill-delete/{id}',[SkillController::class, 'skill_delete']);



Route::get('/dashboard',[ProfileController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

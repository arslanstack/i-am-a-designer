<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminGeneralController;
use App\Http\Controllers\Admin\DesignerManagementController;
use App\Http\Controllers\Admin\FeaturedProjectsManagementController;
use App\Http\Controllers\Admin\ProjectsManagementController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Designer\DesignerAuthController;
use App\Http\Controllers\Designer\DesignerGeneralController;
use App\Http\Controllers\Designer\ProjectController as DesignerProjectController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\User\UserGeneralController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');
Route::get('/designers', [WelcomeController::class, 'designers'])->name('designers');
Route::get('/designer-search', [WelcomeController::class, 'designerSearch'])->name('designerSearch');
Route::get('/about-us', [WelcomeController::class, 'about'])->name('about');
Route::get('/contact-us', [WelcomeController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [WelcomeController::class, 'contactMail'])->name('contactMail');
Route::post('/saveProject', [WelcomeController::class, 'saveProject'])->name('saveProject');
Route::get('/privacy-policy', [WelcomeController::class, 'privacy'])->name('privacy');
Route::post('/increment_view', [WelcomeController::class, 'increment_viewcount'])->name('increment_viewcount');
Route::get('/designer-profile/{username}', [WelcomeController::class, 'designer_profile'])->name('designer_profile');
Route::get('/project/{username}/{slug}', [WelcomeController::class, 'project'])->name('project');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'verifyLogin'])->name('admin.login');
    Route::get('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', [AdminGeneralController::class, 'index'])->name('admin.dashboard');
        Route::get('/change-password', [AdminGeneralController::class, 'showChangePswd'])->name('admin.changePswd');
        Route::post('/update_password', [AdminGeneralController::class, 'updatePswd']);

        Route::group(['prefix'  =>  'users'], function () {
            Route::get('/', [UserManagementController::class, 'index']);
            Route::post('update_statuses', [UserManagementController::class, 'update_statuses']);
            Route::get('detail/{id}', [UserManagementController::class, 'user_details']);
        });
        Route::group(['prefix'  =>  'designers'], function () {
            Route::get('/', [DesignerManagementController::class, 'index']);
            Route::post('update_statuses', [DesignerManagementController::class, 'update_statuses']);
            Route::get('detail/{id}', [DesignerManagementController::class, 'designer_details']);
        });
        Route::group(['prefix'  =>  'projects'], function () {
            Route::get('/', [ProjectsManagementController::class, 'index']);
            Route::post('update_statuses', [ProjectsManagementController::class, 'update_statuses']);
            Route::post('update_featured', [ProjectsManagementController::class, 'update_featured']);
            Route::get('detail/{id}', [ProjectsManagementController::class, 'project_details']);
        });
        Route::group(['prefix'  =>  'featured_projects'], function () {
            Route::get('/', [FeaturedProjectsManagementController::class, 'index']);
        });
    });
});

Route::group(['prefix' => 'designer'], function () {
    Route::get('/', [DesignerAuthController::class, 'showLogin'])->name('designer.login');
    Route::get('/login', [DesignerAuthController::class, 'showLogin'])->name('designer.login');
    Route::post('/login', [DesignerAuthController::class, 'verifyLogin']);
    Route::post('/logout', [DesignerAuthController::class, 'logout'])->name('designer.logout');
    Route::get('/register', [DesignerAuthController::class, 'showRegister'])->name('designer.register');
    Route::post('/register', [DesignerAuthController::class, 'register']);
    Route::get('/verify_now', [DesignerAuthController::class, 'showVerifyNow'])->name('designer.verify_now');
    Route::get('/reset', [DesignerAuthController::class, 'showReset'])->name('designer.reset');
    Route::post('/send-email', [DesignerAuthController::class, 'resetMail'])->name('designer.resetMail');
    Route::get('/reset-link/{token}', [DesignerAuthController::class, 'verifyLink'])->name('designer.verifyLink');
    Route::post('/reset-password', [DesignerAuthController::class, 'resetPassword'])->name('designer.resetPassword');
    Route::get('/verify/{token}', [DesignerGeneralController::class, 'verify'])->name('designer.verify');

    Route::middleware(['auth:designer'])->group(function () {
        Route::get('/dashboard', [DesignerGeneralController::class, 'index'])->name('designer.dashboard');
        Route::middleware(['verified.designer'])->group(function () {
            Route::get('/profile', [DesignerGeneralController::class, 'showProfile'])->name('designer.profile');
            Route::post('/update-profile', [DesignerGeneralController::class, 'updateProfile'])->name('designer.updateProfile');
            Route::get('/projects', [DesignerProjectController::class, 'showProjects'])->name('designer.projects');
            Route::get('/projects/show/{slug}', [DesignerProjectController::class, 'showOneProject'])->name('designer.projectDetails');
            Route::get('/projects/add-new', [DesignerProjectController::class, 'showProjectForm'])->name('designer.add-projects');
            Route::post('/projects/add-new', [DesignerProjectController::class, 'store'])->name('designer.storeProjects');
            Route::post('/projects/edit', [DesignerProjectController::class, 'edit'])->name('designer.editProjects');
            Route::get('/projects/publish/{id}', [DesignerProjectController::class, 'publish'])->name('designer.publishProject');
            Route::get('/projects/unpublish/{id}', [DesignerProjectController::class, 'unpublish'])->name('designer.unpublishProject');
            Route::get('/projects/delete/{id}', [DesignerProjectController::class, 'delete'])->name('designer.deleteProject');
        });
        Route::get('/security', [DesignerGeneralController::class, 'showsecurity'])->name('designer.security');
        Route::post('/change-password', [DesignerGeneralController::class, 'changePswd'])->name('designer.changePswd');
        Route::get('/resend-verify-email', [DesignerGeneralController::class, 'resendVerifyMail'])->name('designer.resendVerificationMail');
    });
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserAuthController::class, 'showLogin'])->name('user.login');
    Route::get('/login', [UserAuthController::class, 'showLogin'])->name('user.login');
    Route::post('/login', [UserAuthController::class, 'verifyLogin'])->name('user.login');
    Route::post('/logout', [UserAuthController::class, 'logout'])->name('user.logout');
    Route::get('/register', [UserAuthController::class, 'showRegister'])->name('user.register');
    Route::post('/register', [UserAuthController::class, 'register']);
    Route::get('/reset', [UserAuthController::class, 'showReset'])->name('user.reset');
    Route::post('/send-email', [UserAuthController::class, 'resetMail'])->name('user.resetMail');
    Route::get('/reset-link/{token}', [UserAuthController::class, 'verifyLink'])->name('user.verifyLink');
    Route::post('/reset-password', [UserAuthController::class, 'resetPassword'])->name('user.resetPassword');
    Route::get('/verify/{token}', [UserGeneralController::class, 'verify'])->name('user.verify');

    Route::middleware(['auth:web'])->group(function () {
        Route::get('/dashboard', [UserGeneralController::class, 'index'])->name('user.dashboard');
        Route::middleware(['verified.user'])->group(function () {
            Route::get('/profile', [UserGeneralController::class, 'showProfile'])->name('user.profile');
            Route::post('/update-profile', [UserGeneralController::class, 'updateProfile'])->name('user.updateProfile');
            Route::get('/saved-projects', [UserGeneralController::class, 'savedProjects'])->name('user.savedProjects');
            Route::get('/removesavedproject/{id}', [UserGeneralController::class, 'removesavedproject'])->name('user.removesavedproject');
        });
        Route::get('/security', [UserGeneralController::class, 'showsecurity'])->name('user.security');
        Route::post('/change-password', [UserGeneralController::class, 'changePswd'])->name('user.changePswd');
        Route::get('/resend-verify-email', [UserGeneralController::class, 'resendVerifyMail'])->name('user.resendVerificationMail');
    });
});

Route::get('/home', [WelcomeController::class, 'home'])->name('home');
Route::post('ckeditor_upload', [DesignerGeneralController::class, 'ckeditor_upload'])->name('ckeditor.upload');

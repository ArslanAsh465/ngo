<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ContactController;

// Main Pages Routes
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about_us');
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact_us.index');
Route::post('/contact-us', [ContactController::class, 'store'])->name('contact_us.store');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

Route::get('/campaigns/school-for-deaf', [HomeController::class, 'school_for_deaf'])->name('school_for_deaf');
Route::get('/campaigns/almudassar-school-for-blind', [HomeController::class, 'school_for_blind'])->name('school_for_blind');
Route::get('/campaigns/disability-centre', [HomeController::class, 'learning_disability'])->name('learning_disability');
Route::get('/campaigns/vocational-training-centre', [HomeController::class, 'vocational_training'])->name('vocational_training');
Route::get('/campaigns/physical-training-centre', [HomeController::class, 'rehabilitation'])->name('rehabilitation');
Route::get('/campaigns/al-mudassar-barnala-branch', [HomeController::class, 'barnala_branch'])->name('barnala_branch');

Route::get('/causes-list', [HomeController::class, 'future_projects'])->name('future_projects');
Route::get('/success-stories', [HomeController::class, 'success_stories'])->name('success_stories');
Route::get('/volunteers', [HomeController::class, 'become_a_volunteer'])->name('become_a_volunteer');
Route::get('/donation', [DonationController::class, 'index'])->name('donate.index');
Route::post('/donation', [DonationController::class, 'store'])->name('donate.store');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    // Bank Routes
    Route::get('/banks', [BankController::class, 'index'])->name('banks.index');
    Route::get('/banks/create', [BankController::class, 'create'])->name('banks.create');
    Route::post('/banks', [BankController::class, 'store'])->name('banks.store');
    Route::get('/banks/{bank}', [BankController::class, 'show'])->name('banks.show');
    Route::get('/banks/{bank}/edit', [BankController::class, 'edit'])->name('banks.edit');
    Route::post('/banks/{bank}', [BankController::class, 'update'])->name('banks.update');
    Route::post('/banks/{bank}/delete', [BankController::class, 'destroy'])->name('banks.destroy');

    // Location Routes
    Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
    Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create');
    Route::post('/locations', [LocationController::class, 'store'])->name('locations.store');
    Route::get('/locations/{location}', [LocationController::class, 'show'])->name('locations.show');
    Route::get('/locations/{location}/edit', [LocationController::class, 'edit'])->name('locations.edit');
    Route::post('/locations/{location}', [LocationController::class, 'update'])->name('locations.update');
    Route::post('/locations/{location}/delete', [LocationController::class, 'destroy'])->name('locations.destroy');

    // Front-End Settings Routes
    Route::get('/frontend/settings', [FrontendController::class, 'frontend_settings'])->name('admin.frontend_settings');
    Route::post('/frontend/settings/homepage/slider', [FrontendController::class, 'frontend_settings_homepage_slider_save'])->name('admin.save.homepageslider');
    Route::get('/frontend/settings/homepage/slider/delete/{id}', [FrontendController::class, 'frontend_settings_homepage_slider_delete'])->name('admin.homepageslider.delete');
    Route::get('/frontend/settings/info', [FrontendController::class, 'frontend_settings_info'])->name('admin.frontend_settings_info');
    Route::post('/frontend/settings/info/save', [FrontendController::class, 'frontend_settings_info_save'])->name('admin.save.info');
    Route::get('/frontend/settings/about', [FrontendController::class, 'frontend_settings_about'])->name('admin.frontend_settings_about');
    Route::post('/frontend/settings/about/save', [FrontendController::class, 'frontend_settings_about_save'])->name('admin.save.about');
    Route::get('/frontend/settings/gallery', [FrontendController::class, 'frontend_settings_gallery'])->name('admin.frontend_settings_gallery');
    Route::post('/frontend/settings/gallery/save', [FrontendController::class, 'frontend_settings_gallery_save'])->name('admin.save.gallery');
    Route::get('/frontend/settings/homepage/gallery/delete/{id}', [FrontendController::class, 'frontend_settings_homepage_gallery_delete'])->name('admin.gallery.delete');
    Route::get('/frontend/settings/homepage/event/delete/{id}', [FrontendController::class, 'frontend_settings_homepage_event_delete'])->name('admin.event.delete');
    Route::get('/frontend/settings/events/load', [FrontendController::class, 'frontend_settings_events'])->name('admin.frontend_settings_events');
    Route::get('/frontend/settings/events', [FrontendController::class, 'frontend_settings_events'])->name('admin.save.events');
    Route::get('/frontend/settings/address', [FrontendController::class, 'frontend_settings_address'])->name('admin.frontend_settings_address');
    Route::post('/frontend/settings/address/save', [FrontendController::class, 'frontend_settings_address_save'])->name('admin.save.address');
    Route::get('/frontend/settings/footer', [FrontendController::class, 'frontend_settings_footer'])->name('admin.frontend_settings_footer');
    Route::post('/frontend/settings/footer/save', [FrontendController::class, 'frontend_settings_footer_save'])->name('admin.save.footer');
    Route::get('/frontend/settings/insights', [FrontendController::class, 'frontend_settings_insights'])->name('admin.frontend_settings_insights');
    Route::post('/frontend/settings/insights/save', [FrontendController::class, 'frontend_settings_insights_save'])->name('admin.save.insights');

    // Donation Routes
    Route::get('/donations', [DonationController::class, 'adminIndex'])->name('admin.donation.index');
    Route::post('/donations', [DonationController::class, 'adminUpdate'])->name('admin.donation.update');

});

require __DIR__.'/auth.php';

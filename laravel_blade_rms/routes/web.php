<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventSectionController;
use App\Http\Controllers\EventSectionTitleController;
use App\Http\Controllers\GallerySectionController;
use App\Http\Controllers\GallerySectionTitleController;
use App\Http\Controllers\HeroSectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuItemsController;
use App\Http\Controllers\MenuSectionTitleController;
use App\Http\Controllers\MenuTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialSectionController;
use App\Http\Controllers\SpecialSectionTitleController;
use App\Http\Controllers\TopBarController;
use App\Http\Controllers\WhyUsSectionController;
use App\Http\Controllers\WhyUsSectionTitleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('admin.index');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth', 'verified'])->group(function () {

    Route::controller(AdminController::class)->group(function () {

        Route::get('/dashboard', 'index')->name('admin.dashboard');

        Route::get('/admin/logout', 'destroy')->name('admin.logout');

        Route::get('/admin/profile', 'adminProfile')->name('admin.profile');

        Route::post('/admin/profile/store', 'adminProfileStore')->name('admin.profile.store');
    });

    Route::controller(TopBarController::class)->prefix('dashboard')->group(function () {

        Route::get('/fn/topbar', 'edit')->name('fn.topbar.edit');

        Route::patch('/fn/topbar/{id}', 'update')->name('fn.topbar.update');
    });


    Route::controller(HeroSectionController::class)->prefix('dashboard')->group(function () {



        Route::get('/fn/hero', 'show')->name('fn.hero.show');

        Route::get('/fn/hero/create', 'create')->name('fn.hero.create');

        Route::post('/fn/hero/store', 'store')->name('fn.hero.store');

        Route::get('/fn/hero/edit/{id}', 'edit')->name('fn.hero.edit');

        Route::patch('/fn/hero/update/{id}', 'update')->name('fn.hero.update');

        Route::delete('/fn/hero/delete/{id}', 'destroy')->name('fn.hero.delete');
    });


    Route::controller(AboutSectionController::class)->prefix('dashboard')->group(function () {

        Route::get('/fn/about', 'edit')->name('fn.about.edit');

        Route::patch('/fn/about/{id}', 'update')->name('fn.about.update');
    });


    Route::controller(WhyUsSectionTitleController::class)->prefix('dashboard')->group(function () {

        Route::get('/fn/why_us_title', 'edit')->name('fn.why_us_title.edit');

        Route::patch('/fn/why_us_title/{id}', 'update')->name('fn.why_us_title.update');
    });

    Route::controller(WhyUsSectionController::class)->prefix('dashboard')->group(function () {

        Route::get('/fn/why_us', 'index')->name('fn.why_us');

        Route::get('/fn/why_us/{id}', 'edit')->name('fn.why_us.edit');

        Route::patch('/fn/why_us/{id}', 'update')->name('fn.why_us.update');
    });



    Route::controller(MenuSectionTitleController::class)->prefix('dashboard')->group(function () {

        Route::get('/fn/menu_title', 'edit')->name('fn.menu_title.edit');

        Route::patch('/fn/menu_title/{id}', 'update')->name('fn.menu_title.update');
    });

    Route::controller(MenuTypeController::class)->prefix('dashboard')->group(function () {

        Route::get('/fn/menu_type', 'index')->name('fn.menu_type');

        Route::get('/fn/menu_type/create', 'create')->name('fn.menu_type.create');

        Route::post('/fn/menu_type/store', 'store')->name('fn.menu_type.store');

        Route::get('/fn/menu_type/{id}', 'edit')->name('fn.menu_type.edit');

        Route::patch('/fn/menu_type/{id}', 'update')->name('fn.menu_type.update');

        Route::delete('/fn/menu_type/{id}', 'destroy')->name('fn.menu_type.delete');
    });

    Route::controller(MenuItemsController::class)->prefix('dashboard')->group(function () {

        Route::get('/fn/menu_item', 'index')->name('fn.menu_item');

        Route::get('/fn/menu_item/create', 'create')->name('fn.menu_item.create');

        Route::post('/fn/menu_item/store', 'store')->name('fn.menu_item.store');

        Route::get('/fn/menu_item/{id}', 'edit')->name('fn.menu_item.edit');

        Route::patch('/fn/menu_item/{id}', 'update')->name('fn.menu_item.update');

        Route::delete('/fn/menu_item/{id}', 'destroy')->name('fn.menu_item.delete');
    });



    // SPECIAL SECTION


    Route::controller(SpecialSectionTitleController::class)->prefix('dashboard')->group(function () {

        Route::get('/fn/sepcial/title', 'edit')->name('fn.special_title.edit');

        Route::patch('/fn/special/title/{id}', 'update')->name('fn.special_title.update');
    });


    Route::prefix('dashboard/fn')->name('fn.')->group(function () {

        Route::resource('special', SpecialSectionController::class);
    });


    // END SPECIAL SECTION


    // EVENT SECTION

    Route::controller(EventSectionTitleController::class)->prefix('dashboard')->group(function () {

        Route::get('/fn/event/title', 'edit')->name('fn.event_title.edit');

        Route::patch('/fn/event/title/{id}', 'update')->name('fn.event_title.update');
    });


    Route::prefix('dashboard/fn')->name('fn.')->group(function () {

        Route::resource('event', EventSectionController::class);
    });

    // END EVENT SECTION


    // GALLERY SECTION 

    Route::controller(GallerySectionTitleController::class)->prefix('dashboard')->group(function () {

        Route::get('/fn/gallery/title', 'edit')->name('fn.gallery_title.edit');

        Route::patch('/fn/gallery/title/{id}', 'update')->name('fn.gallery_title.update');
    });



    Route::prefix('dashboard/fn')->name('fn.')->group(function () {

        Route::resource('gallery', GallerySectionController::class);
    });


    // END GALLERY SECTION

});

Route::controller(AdminController::class)->group(function () {

    Route::get('admin/login', 'login')->name('admin.login');

    Route::get('admin/register', 'register')->name('admin.register');
});


Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/admin/login',[AdminController::class, 'login'])->name('admin.login');
require __DIR__ . '/auth.php';

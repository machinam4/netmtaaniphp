<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdvertsController;
use App\Http\Controllers\HotspotLoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SokoController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

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
    return view('home');
})->name('home');

Route::get('/content', function () {
    return view('Content.content');
})->name('content');

Route::controller(SokoController::class)->prefix('/soko')->group(function () {
    Route::get('/', 'index')->name('soko');
    Route::get('/{section:name}', 'section')->name('soko_section');
    Route::get('/{section:name}/{category:name}', 'category')->name('soko_category');
    Route::get('/{section:name}/{category:name}/{soko:name}', 'sokos_item')->name('soko_item');

    // old routes
    Route::get('/products', 'products')->name('products');
    Route::get('/estate', 'estate')->name('estate');
    Route::get('/estate/{location}', 'estate')->name('location');
    Route::get('/electronics', 'electronics')->name('electronics');
});

Route::get('/sokos/images/{filename}', function ($filename) {
    $path = storage_path() . '/app/sokos/images/' . $filename;
    // dd($path);
    if (!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('imagesSoko');

Route::get('/news/images/{filename}', function ($filename) {
    $path = storage_path() . '/app/news/images/' . $filename;
    // dd($path);
    if (!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('avatar');

Route::get('/content2/images/{filename}', function ($filename) {
    $path = storage_path() . '/app/content2/images/' . $filename;
    // dd($path);
    if (!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('imagesAdverts');
// upload file
Route::post("/upload", [UploadController::class, 'store']);
Route::get("/upload/{tempfile}", [UploadController::class, 'restore']);
Route::delete("/upload/{tempfile}", [UploadController::class, 'destroy']);



Route::prefix('/content')->group(function () {
    Route::controller(NewsController::class)->prefix('/news')->group(function () {
        Route::get('/', 'index')->name('news');

        // news routes
        Route::get('/articles', 'articles')->name('articles');
        Route::get('/channels', 'channels')->name('channels');
        Route::get('/topics', 'topics')->name('topics');
        Route::get('/article/{news}', 'article')->name('article');

        // radios routes
        Route::get('/radios', 'radios')->name('radios');
        Route::get('/radios/{radio}', 'radio_details')->name('radio_details');

        // radios routes
        Route::get('/tvs', 'tvs')->name('tvs');
        Route::get('/tvs/{tv}', 'tv_details')->name('tv_details');
    });
    Route::controller(MusicController::class)->prefix('/music')->group(function () {
        Route::get('/', 'index')->name('music');
        Route::get('/{media}', 'media')->name('music_media');
        Route::get('/{media}/{genre}', 'genre')->name('music_genre');
    });
    Route::controller(MovieController::class)->prefix('/movie')->group(function () {
        Route::get('/', 'index')->name('movie');
        // Route::get('/movie_create', 'movie_create')->name('movie_create');
        // Route::post('/movie_save', 'movie_save')->name('movie_save');

        Route::get('/genre/{genre}', 'genre')->name('movie_genre');
    });
});


// admin routes

Route::prefix('/admin')->middleware(['auth'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/', 'index')->name('dashboard');
        Route::get('/stats', 'stats')->name('stats');
        Route::prefix('/soko')->group(function () {
            Route::get('/{section:name}', 'soko_items')->name('admin_soko_items');
            Route::get('/item/create', 'create')->name('soko_create');
            Route::post('/categories', 'categories')->name('soko_categories');
            Route::post('/sections', 'sections')->name('soko_sections');
            Route::post('/save', 'save')->name('soko_save');
            // Route::post('/save', 'save')->name('soko_save');
            Route::get('/{item}/edit', 'editItem')->name('soko_edit');
            Route::post('/update/{item}', 'updateItem')->name('soko_update');
            Route::get('/delete/{item}', 'deleteItem')->name('soko_delete');
        });
    });
    Route::controller(AdvertsController::class)->prefix('/adverts')->group(function () {
        Route::get('/', 'adverts')->name('admin_adverts_items');
        // Route::get('/{section:name}', 'averts_items')->name('admin_adverts_items');
        Route::get('/create', 'create')->name('advert_create');
        Route::post('/save', 'save')->name('advert_save');

        Route::get('/{item}/edit', 'editItem')->name('advert_edit');
        Route::post('/update/{item}', 'updateItem')->name('advert_update');
        Route::get('/delete/{item:advert_no}', 'deleteItem')->name('advert_delete');
    });

    // Admin contents
    Route::prefix('/content')->group(function () {
        Route::controller(NewsController::class)->prefix('/news')->group(function () {
            Route::get('/', 'admin_articles')->name('admin_news');
            Route::prefix('/scrape')->group(function () {
                Route::get('/', 'admin_scrapes')->name('admin_scrapes');
                Route::get('/create', 'create')->name('scrape_create');
                Route::get('/scrapeNow', 'doNewsScraping')->name('scrape');
                Route::post('/save', 'save')->name('scrape_save');
                Route::get('/{scrape}/edit', 'editScrape')->name('scrape_edit');
                Route::post('/update/{scrape}', 'updateScrape')->name('scrape_update');
                Route::get('/delete/{scrape}', 'deleteScrape')->name('scrape_delete');
            });


            // radios routes
            Route::prefix('/radios')->group(function () {
                Route::get('/', 'admin_radios')->name('admin_radios');
                Route::get('/create', 'radio_create')->name('radio_create');
                Route::post('/save', 'radio_save')->name('radio_save');
                Route::get('/{radio}/edit', 'editRadio')->name('radio_edit');
                Route::post('/update/{radio}', 'updateRadio')->name('radio_update');
                Route::get('/delete/{radio}', 'deleteRadio')->name('radio_delete');
            });

            // Tvs routes
            Route::prefix('/tvs')->group(function () {
                Route::get('/', 'admin_tvs')->name('admin_tvs');
                Route::get('/create', 'tv_create')->name('tv_create');
                Route::post('/save', 'tv_save')->name('tv_save');
                Route::get('/{tv}/edit', 'editTv')->name('tv_edit');
                Route::post('/update/{tv}', 'updateTv')->name('tv_update');
                Route::get('/delete/{tv}', 'deleteTv')->name('tv_delete');
            });
        });
        Route::controller(MusicController::class)->prefix('/music')->group(function () {
            Route::get('/', 'music_list')->name('admin_music');
            Route::get('/music_create', 'music_create')->name('music_create');
            Route::post('/music_save', 'music_save')->name('music_save');
            Route::get('/{music}/edit', 'editMusic')->name('music_edit');
            Route::post('/update/{music}', 'updateMusic')->name('music_update');
            Route::get('/delete/{music}', 'deleteMusic')->name('music_delete');
        });

        Route::controller(MovieController::class)->prefix('/movie')->group(function () {
            Route::get('/', 'index')->name('admin_movie');
            Route::get('/movie_create', 'movie_create')->name('movie_create');
            Route::post('/movie_save', 'movie_save')->name('movie_save');

            Route::get('/genre/{genre}', 'genre')->name('admin_movie_genre');
        });
    });
});

Route::prefix('/hotspot')->group(function () {
    Route::controller(HotspotLoginController::class)->group(function () {
        Route::post('/', 'index')->name('hotspotlogin');
    });
});

require __DIR__ . '/auth.php';

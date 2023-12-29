<?php

use Illuminate\Support\Facades\Route;

//Agregar esta clase para redireccionar 
use Illuminate\Support\Facades\Redirect;

//controller
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\SaleController;

use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\NuestrostourController;

//end controller

//models
use App\Models\Tour;


//Agregar esta línea para redireccionar al momento de solo ingresar /Mi_blog
Route::get('/Passarinho', function () {
    return redirect('/Passarinho/public');
});

Route::get('/', function () {
    $tour = Tour::all();
    return view('destacado', compact('tour'));
})->name('Destacado');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/quienes-somos', [App\Http\Controllers\QuienesSomosController::class, 'index'])->name('QuienesSomos.index');

Route::get('/nuestros-tours', [App\Http\Controllers\NuestrostourController::class, 'index'])->name('NuestrosTours.index');

Route::get('/detalles-tours/{id}', [App\Http\Controllers\NuestrostourController::class, 'detailstour'])->name('NuestrosTours.detailstour');

Route::prefix('admin')->middleware('auth','isAdmin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('Dashboard.index');

    
    //Tour

    Route::get('tour', [TourController::class, 'index'])->name('Tour.index');

    Route::get('create-tour', [TourController::class, 'create'])->name('Tour.create');
    
    Route::post('store-tour', [TourController::class, 'store'])->name('Tour.store');
    
    Route::get('edit-tour/{id}',[TourController::class, 'edit'])->name('Tour.edit');
        
    Route::put('update-tour/{id}',[TourController::class, 'update'])->name('Tour.update');
        
    Route::get('show-tour/{id}',[TourController::class, 'show'])->name('Tour.show');
        
    Route::delete('destroy-tour/{id}',[TourController::class, 'destroy'])->name('Tour.destroy');

    Route::get('info-itinerio-tour/{id}',[TourController::class, 'infoitinerary'])->name('Tour.itinerary');

    //finish

    // Sale Seller

    Route::get('sale', [SaleController::class, 'index'])->name('Sale.index');

    Route::get('tour-select', [SaleController::class, 'tourselect'])->name('Sale.tour.select');
    
    Route::get('create-sale/{id}', [SaleController::class, 'create'])->name('Sale.create');
    
    Route::post('store-sale', [SaleController::class, 'store'])->name('Sale.store');
    
    Route::get('edit-sale/{id}',[SaleController::class, 'edit'])->name('Sale.edit');
    
    Route::put('update-sale/{id}',[SaleController::class, 'update'])->name('Sale.update');
    
    Route::get('show-sale/{id}',[SaleController::class, 'show'])->name('Sale.show');
    
    Route::delete('destroy-sale/{id}',[SaleController::class, 'destroy'])->name('Sale.destroy');
    
    Route::get('print-sale/{id}', [SaleController::class, 'print'])->name('Sale.print');
    
    //finish
});



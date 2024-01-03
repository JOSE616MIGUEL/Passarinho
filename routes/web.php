<?php

use Illuminate\Support\Facades\Route;

//Agregar esta clase para redireccionar 
use Illuminate\Support\Facades\Redirect;

//controller
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TourController;
use App\Http\Controllers\Admin\SaleController;
use App\Http\Controllers\Admin\ConfigurationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\QuienesSomosController;
use App\Http\Controllers\NuestrostourController;

//end controller

//models
use App\Models\Tour;
use App\Models\User;


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

Route::get('/cliente-configuracion/{id}', [App\Http\Controllers\HomeController::class, 'configuracionperfil'])->name('ClienteConfiguracion.index');

Route::put('/cliente-configuracion-update/{id}', [App\Http\Controllers\HomeController::class, 'configuracionperfilupdate'])->name('ClienteConfiguration.update');

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

    // Sale

    Route::get('sale', [SaleController::class, 'index'])->name('Sale.index');

    Route::get('tour-select', [SaleController::class, 'tourselect'])->name('Sale.tour.select');
    
    Route::get('create-sale', [SaleController::class, 'create'])->name('Sale.create');
    
    Route::post('store-sale', [SaleController::class, 'store'])->name('Sale.store');
    
    Route::get('edit-sale/{id}',[SaleController::class, 'edit'])->name('Sale.edit');
    
    Route::put('update-sale/{id}',[SaleController::class, 'update'])->name('Sale.update');
    
    Route::get('show-sale/{id}',[SaleController::class, 'show'])->name('Sale.show');
    
    Route::delete('destroy-sale/{id}',[SaleController::class, 'destroy'])->name('Sale.destroy');
    
    Route::get('print-sale/{id}', [SaleController::class, 'print'])->name('Sale.print');
    
    //finish

    //configuration user

    Route::get('configuration-user/{id}', [ConfigurationController::class, 'index'])->name('Configuration.index');

    Route::put('configurationupdate-user/{id}',[ConfigurationController::class, 'update'])->name('Configuration.update');
  
    //finish configuration user

    //User

    Route::get('user', [UserController::class, 'index'])->name('User.index');

    Route::get('create-user', [UserController::class, 'create'])->name('User.create');
        
    Route::post('store-user', [UserController::class, 'store'])->name('User.store');
        
    Route::get('edit-user/{id}',[UserController::class, 'edit'])->name('User.edit');
            
    Route::put('update-user/{id}',[UserController::class, 'update'])->name('User.update');
            
    Route::get('show-user/{id}',[UserController::class, 'show'])->name('User.show');
            
    Route::delete('destroy-user/{id}',[UserController::class, 'destroy'])->name('User.destroy');
    
    //finish

    //Place

    Route::get('place', [PlaceController::class, 'index'])->name('Place.index');

    Route::get('create-place', [PlaceController::class, 'create'])->name('Place.create');
        
    Route::post('store-place', [PlaceController::class, 'store'])->name('Place.store');
        
    Route::get('edit-place/{id}',[PlaceController::class, 'edit'])->name('Place.edit');
            
    Route::put('update-place/{id}',[PlaceController::class, 'update'])->name('Place.update');
            
    Route::get('show-place/{id}',[PlaceController::class, 'show'])->name('Place.show');
            
    Route::delete('destroy-place/{id}',[PlaceController::class, 'destroy'])->name('Place.destroy');
    
    //finish

    //Galery

    Route::get('galery', [GaleryController::class, 'index'])->name('Galery.index');

    Route::get('create-galery', [GaleryController::class, 'create'])->name('Galery.create');
        
    Route::post('store-galery', [GaleryController::class, 'store'])->name('Galery.store');
        
    Route::get('edit-galery/{id}',[GaleryController::class, 'edit'])->name('Galery.edit');
            
    Route::put('update-galery/{id}',[GaleryController::class, 'update'])->name('Galery.update');
            
    Route::get('show-galery/{id}',[GaleryController::class, 'show'])->name('Galery.show');
            
    Route::delete('destroy-galery/{id}',[GaleryController::class, 'destroy'])->name('Galery.destroy');
    
    //finish

    //Contact

    Route::get('contact', [ContactController::class, 'index'])->name('Contact.index');

    Route::get('create-contact', [ContactController::class, 'create'])->name('Contact.create');
        
    Route::post('store-contact', [ContactController::class, 'store'])->name('Contact.store');
        
    Route::get('edit-contact/{id}',[ContactController::class, 'edit'])->name('Contact.edit');
            
    Route::put('update-contact/{id}',[ContactController::class, 'update'])->name('Contact.update');
            
    Route::get('show-contact/{id}',[ContactController::class, 'show'])->name('Contact.show');
            
    Route::delete('destroy-contact/{id}',[ContactController::class, 'destroy'])->name('Contact.destroy');
    
    //finish
});



<?php
Route::get('/login', function (){
    return 'Login';
})->name('login');

Route::middleware([])->group(function (){

    Route::prefix('panel')->group(function (){
        Route::get('/dashboard', function (){
            return 'Home Admin';
        });
        
        Route::get('/financeiro', function (){
            return 'Financeiro Admin';
        });
        
        Route::get('/produtos', function (){
            return 'Produtos Admin';
        });
    
        Route::get('/', function (){
            return 'Admin';
        });
    });
});


//Route::get('redirect3', function () {
//    return redirect('/nome-url');
//});

Route::get('redirect3', function () {
    return redirect()->route('url.name');
});

//route('/url.name');

Route::get('/nome-url', function () {
    return 'Hey hey hey';
})->name('url.name');

Route::view('/view', 'welcome');

//Route::get('/view', function () {
//    return view('welcome');
//});

Route::redirect('/redirect1', '/redirect2');

//Route::get('redirect1', function () {
//    return redirect('/redirect2');
//});

Route::get('redirect2', function () {
    return 'Redirect 02';
});

Route::get ('/produtos/{idProduct?}', function ($idProduct = '') {
    return "Prodduto(s) {$idProduct}";
});

Route::get('/categoria/{flag}/posts', function ($flag) {
    return "Posts da categoria: {$flag}";
}); 

Route::get('/categorias/{flag}', function ($flag) {
    return "Produtos da categoria: {$flag}";
});

Route::match(['get', 'post'], '/match', function () {
    return 'match';
});

Route::any('/any', function () {
    return 'Any';
});

Route::post('/register', function () {
    return '';
});

Route::get('/empresa', function () {
    return view('site.contact');
});

Route::get('/contato', function () {
    return 'Contato';
});

Route::get('/', function () {
    return 'Olá1';
});

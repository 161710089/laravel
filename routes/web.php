<?php
// basic rouiting
Route::get('/', function () {
    return view('welcome');
});
//basic parameters
Route::get('/lc', function () {
    return '<h1>Selamat Datang</h1><br>'
    	   .'di webapp saya<br>'
    	   .'laravel emang keren';
});

 Route::get('user/{nama}',function($a){
 return 'nama saya adalah '.$a.' '   ;        

});

Route::get('kantin/<b>{makanan}<b>/{minuman}/{ngemil}<b>',function ($a,$b,$c){
return    ' <b>'.$a.'<b> <br>'
         .' <b>'.$b.'<b> <br> '
         .' <b>'.$c.'<b> <br>';
});        

 Route::get('user/{nama?}',function($b="Dadang conelo"){
 return $b;        

});






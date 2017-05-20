<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'sajan\calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'sajan\calculator\CalculatorController@subtract');
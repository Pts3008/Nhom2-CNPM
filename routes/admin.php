<?php 
Route::group(['prefix'=>'admin','namespace'=>'admin','as'=>'admin.'],function(){
    Route::resource('category','ControllerCategory');
});
?>
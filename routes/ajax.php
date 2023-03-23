<?php
Route::group(['prefix'=>'ajax','as'=>'ajax.'],function(){
    //delete option
    Route::get('delete_option/{option_id}','AjaxController@delete_option')->name('delete_option');



    //add options
    Route::post('add_sample_type','AjaxController@add_sample_type')->name('add_sample_type');
    Route::post('add_organism','AjaxController@add_organism')->name('add_organism');
    Route::post('add_colony_count','AjaxController@add_colony_count')->name('add_colony_count');
    
    //get roles
    Route::get('get_roles','AjaxController@get_roles')->name('get_roles');  

    //get online users
    Route::get('online','AjaxController@online')->name('online')->middleware('Admin');

    //get chat
    Route::get('get_chat/{id}','AjaxController@get_chat')->name('get_chat')->middleware('Admin');
    Route::get('chat_unread/{id}','AjaxController@chat_unread')->name('chat_unread')->middleware('Admin');
    Route::post('send_message/{id}','AjaxController@send_message')->name('send_message')->middleware('Admin');

    //change lang status
    Route::post('change_lang_status/{id}','AjaxController@change_lang_status')->name('change_lang_status')->middleware('Admin');

    //add category
    Route::post('add_expense_category','AjaxController@add_expense_category')->name('add_expense_category')->middleware('Admin');
    
    //get unread messages
    Route::get('get_unread_messages','AjaxController@get_unread_messages')->name('get_unread_messages')->middleware('Admin');
    Route::get('get_unread_messages_count/{id}','AjaxController@get_unread_messages_count')->name('get_unread_messages_count')->middleware('Admin');
   
    //get my messages
    Route::get('get_my_messages/{id}','AjaxController@get_my_messages')->name('get_my_messages')->middleware('Admin');
      
    //load more messages
    Route::get('load_more/{user_id}/{message_id}','AjaxController@load_more')->name('load_more')->middleware('Admin');
    

});

?>
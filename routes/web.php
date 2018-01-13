<?php

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
    return view('welcome');
});

Route::get('test-mail', function () {
    \Mail::send([], [], function ($message) { $message->to(env('TEST_MAIL_TO'))->subject("Testing simple email"); });
    echo "Simple Mail Sent";

    \Mail::to(env('TEST_MAIL_TO'))->queue(new App\Mail\TestQueueMail());
    echo '<br/><br/>Queue Mail Sent- to run queue fire <b>php artisan queue:work</b>';

    echo '<br/><br/>Also a cron command is there run using <b>php artisan test:cron</b>';

    echo '<br/><br/>To tinker email test command : <br/>\Mail::send([],[], function($message) { $message->to("'.env('TEST_MAIL_TO').'")->subject("Testing tinker email"); });';
});

Route::get('test-simple-mail', function () {
    mail(env('TEST_MAIL_TO'),"Testing simple email - php mail function","content");
    echo "Simple Mail Sent";

    //\Mail::to(env('TEST_MAIL_TO'))->queue(new App\Mail\TestQueueMail());
    //echo '<br/><br/>Queue Mail Sent- to run queue fire <b>php artisan queue:work</b>';
    echo "<br/><br/>Queue not possible with php mail function";

    echo '<br/><br/>Also a cron command is there run using <b>php artisan test:cron1</b>';

    echo '<br/><br/>To tinker email test command : <br/>mail("'.env('TEST_MAIL_TO').'","Testing tinker email - php mail function","content");';
});

Route::get('infophp',function(){
    phpinfo();
});
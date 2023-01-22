<?php
/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

const MEETUP_WITH_ID = 'meetup/{id}';

$router->group(['prefix'=>'api'],function () use ($router){
    // list
    $router->get('meetups', ['uses'=>'MeetupController@getAllMeetup']);


    // list favorite
    $router->get('meetup/favorites', ['uses'=>'MeetupController@getFavorites']);

    // add
    $router->post('meetup', ['uses'=>'MeetupController@addMeetup']);

    // get one record
    $router->get(MEETUP_WITH_ID, ['uses'=>'MeetupController@getOneMeetup']);

    // edit
    $router->put(MEETUP_WITH_ID, ['uses'=>'MeetupController@editMeetup']);

    // delete
    $router->delete(MEETUP_WITH_ID , ['uses'=>'MeetupController@deleteMeetup']);

    
});


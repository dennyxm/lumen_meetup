<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller;
use App\Models\Meetup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class MeetupController extends Controller{

    // list all
    public function getAllMeetup() {
        return response()->json(Meetup::all());
    }

    // add
    public function addMeetup(Request $request) {
        $meetup = Meetup::create($request->all());
        return response()->json($meetup, 201);
    }

    // get one
    public function getOneMeetup($id) {
        return response()->json(Meetup::find($id));
    }

    // edit
    public function editMeetup($id, Request $request){
        $meetup = Meetup::findOrFail($id);
        $meetup->update($request->all());

        return response()->json($meetup, 200);
    }

    // delete
    public function deleteMeetup($id) {
        Meetup::findOrFail($id)->delete();
        return response('Meetup successfully deleted', 200);
    }

    // list favorite
    public function getFavorites(){
        $favorites = DB::table('meetups')->where('isfavorite', true);
        return response()->json($favorites);
    }
}
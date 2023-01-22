<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meetup extends Model{
    protected $table ='meetups';
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'title', 'image','location','time','desc','isfavorite'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        //'password',
    ];
}
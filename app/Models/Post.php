<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table = 'posts';
    //primary key change
    public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';


    protected  $fillable = ['tag', 'title', 'content', 'user_id','image', 'status'];



    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;


    protected $table = 'media';

    protected $fillable = ['category', 'name', 'image', 'user_id'];


    
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

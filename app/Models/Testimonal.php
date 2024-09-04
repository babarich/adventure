<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonal extends Model
{
    use HasFactory;

    protected $table = 'testimonals';

    protected $fillable = ['name', 'title', 'content', 'user_id', 'rate', 'status'];



    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }



}

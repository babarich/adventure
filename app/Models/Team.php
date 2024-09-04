<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;


    protected  $table = 'teams';


    protected $fillable = ['name', 'title', 'user_id', 'image', 'status'];




}

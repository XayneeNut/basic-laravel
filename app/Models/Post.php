<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";
    protected $primaryKey = 'id_post';
    public $timestamps = false;
    use HasFactory;
}

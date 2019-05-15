<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    // Table name
    protected $table = "posts";
    // Primary key
    public $primaryKey = "id";
    // timestamp
    public $timestamps = "true";

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'title','content'
    ];
}

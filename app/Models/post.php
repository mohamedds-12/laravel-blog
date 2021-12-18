<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;


    // properties to be filled with the create method 
    protected $fillable = ['title', 'content', 'image'];
    // Hide certain Attributes 
    protected $hidden = ['updated_at',];
    // Show certain Attributes in Json
    protected $visible = ['title', 'image', 'content', 'created_at'];

    protected $dates = ['deleted_at'];
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = ['image', 'mobile_image', 'title', 'link', 'is_active'];
}
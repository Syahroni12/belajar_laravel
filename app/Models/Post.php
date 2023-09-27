<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // use HasFactory;
    // protected $fillable=['title','author','excerpt','body'];//field yang boleh diisi di database
    protected $guarded=["id"];//fungsi atau varibel guarded untk field yang tidak boleh diisi
}

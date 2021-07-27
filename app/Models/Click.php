<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Click extends Model
{
    protected $fillable = ['id_link', 'click_date']; 

    use HasFactory;

    public $timestamps = false;
    
}

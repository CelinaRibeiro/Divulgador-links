<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = ['id_page', 'view_date'];

    use HasFactory;

    public $timestamps = false;
}

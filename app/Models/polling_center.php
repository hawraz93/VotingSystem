<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class polling_center extends Model
{
    protected $table= 'polling_centers';
    protected $guarded= [];
    use HasFactory;
}

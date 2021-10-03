<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidates extends Model
{
    protected $table= 'candidates';
    protected $guarded= [];
    use HasFactory;
}

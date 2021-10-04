<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voting extends Model
{
    protected $table ='votings';
    protected $guarded =[];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class REG_center extends Model
{
    protected $table= 'r_e_g_centers';
    protected $guarded= [];
    use HasFactory;

    
    public function registPre(): HasOne
    {
        return $this->hasOne(Prefecture::class, 'id', 'pre_id');
    }
    public function registCir(): HasOne
    {
        return $this->hasOne(circles::class, 'id', 'circle_id');
    }
    
}

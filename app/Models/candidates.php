<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class candidates extends Model
{
    protected $table= 'candidates';
    protected $guarded= [];
    use HasFactory;

    public function candidPre(): HasOne
    {
        return $this->hasOne(Prefecture::class, 'id', 'pre_id');
    }
    public function candidCir(): HasOne
    {
        return $this->hasOne(circles::class, 'id', 'circle_id');
    }
}

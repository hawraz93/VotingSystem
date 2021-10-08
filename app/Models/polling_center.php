<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class polling_center extends Model
{
    protected $table= 'polling_centers';
    protected $guarded= [];
    /**
     * Get the user associated with the polling_center
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function pollpre(): HasOne
    {
        return $this->hasOne(Prefecture::class, 'id', 'pre_id');
    }
    public function pollcir(): HasOne
    {
        return $this->hasOne(circles::class, 'id', 'circle_id');
    }
    public function pollReg(): HasOne
    {
        return $this->hasOne(REG_center::class, 'id', 'RE_id');
    }

    use HasFactory;
}
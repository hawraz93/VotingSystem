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
    public function Pcircles(): HasOne
    {
        return $this->hasOne(circles::class, 'circle_id', 'id');
    }
    use HasFactory;
}
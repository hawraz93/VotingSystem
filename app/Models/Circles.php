<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Circles extends Model
{
    protected $table= 'circles';
    protected $guarded= [];
          /**
           * Get the user associated with the Circles
           *
           * @return \Illuminate\Database\Eloquent\Relations\HasOne
           */
          public function circles_pre(): HasOne
          {
              return $this->hasOne(Prefecture::class, 'id', 'pre_id');
          }
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class voting extends Model
{
    protected $table ='votings';
    protected $guarded =[];
                   /**
                    * Get the user associated with the voting
                    *
                    * @return \Illuminate\Database\Eloquent\Relations\HasOne
                    */
                   public function voteCandid(): HasOne
                   {
                       return $this->hasOne(candidates::class, 'id', 'candid_id');
                   }
                   public function votePoll(): HasOne
                   {
                       return $this->hasOne(polling_center::class, 'id', 'polling_id');
                   }
                   public function voteReg(): HasOne
                   {
                       return $this->hasOne(REG_center::class, 'id', 'RE_id');
                   }
    use HasFactory;
}
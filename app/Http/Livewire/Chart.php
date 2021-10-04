<?php

namespace App\Http\Livewire;

use App\Models\candidates;
use App\Models\polling_center;
use App\Models\voting;
use Livewire\Component;

class Chart extends Component
{

    public function deleteVote($id){
          voting::find($id)->delete();
                 session()->flash('message', 'کرداری سڕینەوەکە سەرکەوتوبوو');

    }
    public function render()
    {
           $array= [

            // 'acircles' => Circles::all(),
            'vote' => voting::with('voteCandid')->with('votePoll')->with('voteReg')->get(),
            // 'registrationCeneters' => REG_center::all(),
            // 'pollingCenters' => polling_center::all(),
        ];

        return view('livewire.chart' ,$array);
    }
}

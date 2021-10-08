<?php

namespace App\Http\Livewire;

use App\Models\candidates;
use App\Models\Circles;
use App\Models\Prefecture;
use App\Models\voting;
use Livewire\Component;

class StatusVote extends Component
{

    public $selectPrefecture;
    public $selectCircle;
    public $selectcandid;


    public $numberOfVote;
    public $numberOfVoter=1;
    public $numberOfVotes;
    public $prefectures,
           $circles,
           $circless,
           $candids,
           $persentage;

    public $voter_num;
           public function mount(){
            $this->prefectures =Prefecture::all();
            $this->circles = collect();
            $this->circless = collect();
            $this->candids = collect();
      }

      public function updatedselectPrefecture($value){

        $this->circles = Circles::where('pre_id',$value)->get();

       }
        public function updatedselectCircle($value){
         $this->candids = candidates::where('circle_id',$value)->get();
         $this->circless = Circles::where('id',$value)->get();
         $this->numberOfVoter = Circles::select('voter_num')->where('id',$value)->value('voter_num');


       }
        public function updatedselectcandid($value){

                $this->numberOfVote = voting::where('candid_id',$value)->sum('voteNum');

       }

       public function summ(){

           if (!$this->selectcandid==NULL) {
            $this->numberOfVotes = voting::where('candid_id',$this->selectcandid)->sum('voteNum');

            $this->persentage= $this->numberOfVotes/$this->numberOfVoter *100;
          
           } else {

           }
       }


    public function render()
    {
        return view('livewire.status-vote');
    }
}

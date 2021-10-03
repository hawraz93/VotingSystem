<?php

namespace App\Http\Livewire;

use App\Models\candidates;
use App\Models\Circles;
use App\Models\polling_center;
use App\Models\Prefecture;
use App\Models\REG_center;
use App\Models\voting as ModelsVoting;
use Livewire\Component;

class Voting extends Component
{

    public $selectPrefecture;
    public $selectCircle;
    public $selectReg;
    public $selectpolling;
    public $selectcandid;
    public  $Reg_name, $Pol_name;

    public $prefectures,
           $circles,
           $REG_centers,
           $poll_centers,
           $candids;


           public function mount(){
            $this->prefectures =Prefecture::all();
            $this->circles = collect();
            $this->REG_centers = collect();
            $this->poll_centers = collect();
            $this->candids = collect();
      }

      public function updatedselectPrefecture($value){

        $this->circles = Circles::where('pre_id',$value)->get();

   }
        public function updatedselectCircle($value){

    $this->REG_centers = REG_center::where('circle_id',$value)->get();
    $this->candids = candidates::where('circle_id',$value)->get();

   }
        public function updatedselectReg($value){

    $this->poll_centers = polling_center::where('RE_id',$value)->get();

   }

// public function polling_register(){
//  $Prefectuers_validate = $this->validate([
//      'Pol_name' => 'required|unique:polling_centers',
//  ]);

     public function candidate_register(){
       $Prefectuers_validate = $this->validate([
         'Can_name' => 'required|unique:candidates',
         'number' => 'required|unique:candidates',
         'pre_id' => 'required',
         'circle_id' => 'required',

     ]);
    //  pre_id	RE_id	circle_id	polling_id	candid_id
       ModelsVoting::create([
         'pre_id'  =>$this->selectPrefecture,
         'circle_id'  =>$this->selectCircle,
        'RE_id'  =>$this->selectReg,
        'polling_id'  =>$this->selectpolling,
        'candid_id'  =>$this->selectcandid,

     ]);
       session()->flash('message', 'candidates saved ');
   }
    public function render()
    {
        $array= [
            'prefectures' => Prefecture::all(),
            'circles' => Circles::all(),
            'candidates' => candidates::all(),
            'registrationCeneters' => REG_center::all(),
            'pollingCenters' => polling_center::all(),
        ];

        return view('livewire.voting' ,$array);
    }
}

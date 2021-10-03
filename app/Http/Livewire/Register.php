<?php

namespace App\Http\Livewire;

use App\Models\candidates;
use App\Models\Circles;
use App\Models\polling_center;
use App\Models\Prefecture;
use App\Models\REG_center;
use Livewire\Component;

class Register extends Component
{
    public $Pre_name,
           $Cir_name,
           $Reg_name,
           $Pol_name,
           $Can_name;

    public $selectPrefecture;
    public $selectCircle;
    public $selectReg;

    public $REG_centers;
    public $prefectures;
    public $circles;


   public $pre_id,$pre_selecte;

    public function Prefectuers_register(){
        $Prefectuers_validate = $this->validate([
            'Pre_name' => 'required|unique:prefectures',
        ]);
        Prefecture::create([
           'Pre_name'  =>$this->Pre_name,
        ]);
        session()->flash('message','Prefectuer saved ');


    }
    public function circle_register(){
        $Prefectuers_validate = $this->validate([
            'Cir_name' => 'required',
            'pre_selecte'   =>'required'
        ]);
        Circles::create([
           'Cir_name'  =>$this->Cir_name,
           'pre_id'    =>$this->pre_selecte,
        ]);
        session()->flash('message','Circle  saved ');


    }

    public function mount(){
          $this->prefectures =Prefecture::all();
          $this->circles = collect();
          $this->REG_centers = collect();


    }

    public function updatedselectPrefecture($value){

         $this->circles = Circles::where('pre_id',$value)->get();

    }
    public function updatedselectReg($value){

         $this->REG_centers = REG_center::where('RE_id',$value)->get();

    }


    public function polling_register(){
        $Prefectuers_validate = $this->validate([
            'Pol_name' => 'required|unique:polling_centers',
        ]);
        polling_center::create([
           'Pol_name'  =>$this->Pol_name,
        ]);
        session()->flash('message','polling center saved ');


    }
    public function candidate_register(){
        $Prefectuers_validate = $this->validate([
            'Can_name' => 'required|unique:candidates',
        ]);
        candidates::create([
           'Can_name'  =>$this->Can_name,
        ]);
        session()->flash('message','candidates saved ');
    }

    public function render()
    {
        // $array= [
        //     'prefectures' => Prefecture::all(),
        //     'circles' => Circles::all(),
        //     'candidates' => candidates::all(),
        //     'registrationCeneters' => REG_center::all(),
        //     'pollingCenters' => polling_center::all(),
        // ];


        return view('livewire.register');
    }
}

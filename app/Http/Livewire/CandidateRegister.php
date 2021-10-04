<?php

namespace App\Http\Livewire;

use App\Models\candidates;
use App\Models\Circles;
use App\Models\Prefecture;
use Livewire\Component;

class CandidateRegister extends Component
{
    public $selectPrefecture;
    public $selectCircle;
    public $selectReg;
    public  $Reg_name, $Pol_name;

    public $REG_centers;
    public $prefectuers_1;
    public $circles_1;
    public $Can_name;
    public $number;



    public function mount(){
        $this->prefectuers_1 =Prefecture::all();
        $this->circles_1 = collect();
        $this->REG_centers = collect();
  }

  public function updatedselectPrefecture($value){

       $this->circles_1 = Circles::where('pre_id',$value)->get();

  }

  public function candidate_register(){
    $Prefectuers_validate = $this->validate([
        'Can_name' => 'required|unique:candidates',
        'number' => 'required|unique:candidates',
    ]);
    candidates::create([
        'Can_name'  =>$this->Can_name,
        'number'  =>$this->number,
       'pre_id'  =>$this->selectPrefecture,
       'circle_id'  =>$this->selectCircle,

    ]);
    session()->flash('message','candidates saved ');

}
public function deleteCandid($id)
{
    candidates::find($id)->delete();
           session()->flash('message', 'ناوی کاندیدەکە بەسەرکەوتەیی سڕایەوە !');

}


    public function render()
    {
               $array= [

            // 'acircles' => Circles::all(),
            'candidates' => candidates::all(),
            // 'registrationCeneters' => REG_center::all(),
            // 'pollingCenters' => polling_center::all(),
        ];
        return view('livewire.candidate-register',$array);
    }
}

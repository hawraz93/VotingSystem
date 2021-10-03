<?php

namespace App\Http\Livewire;

use App\Models\Circles;
use App\Models\polling_center;
use App\Models\Prefecture;
use App\Models\REG_center;
use Livewire\Component;

class PollingRegister extends Component
{
    public $selectPrefecture;
    public $selectCircle;
    public $selectReg;
    public  $Reg_name, $Pol_name;

    public $REG_centers;
    public $prefectures;
    public $circles_1;



    public function mount(){
        $this->prefectures =Prefecture::all();
        $this->circles_1 = collect();
        $this->REG_centers = collect();


  }

  public function updatedselectPrefecture($value){

       $this->circles_1 = Circles::where('pre_id',$value)->get();

  }
  public function updatedselectCircle($value){

       $this->REG_centers = REG_center::where('circle_id',$value)->get();

  }

  public function polling_register(){
    $Prefectuers_validate = $this->validate([
        'Pol_name' => 'required|unique:polling_centers',
    ]);

    polling_center::create([
       'Pol_name'  =>$this->Pol_name,
       'pre_id'  =>$this->selectPrefecture,
       'circle_id'  =>$this->selectCircle,
       'RE_id'  =>$this->selectReg,

    ]);
    session()->flash('message','polling center saved ');


}


    public function render()
    {
        return view('livewire.polling-register');
    }
}

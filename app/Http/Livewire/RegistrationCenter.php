<?php

namespace App\Http\Livewire;

use App\Models\Circles;
use Livewire\Component;
use App\Models\Prefecture;
use App\Models\REG_center;

class RegistrationCenter extends Component
{
    public $selectPrefecture;
    public $selectCircle;
    public $selectReg;
    public  $Reg_name, $Pol_name;

    public $REG_centers;
    public $prefectures;
    public $circles;



    public function mount(){
        $this->prefectures =Prefecture::all();
        $this->circles  = collect();
        $this->REG_centers = collect();


  }

  public function updatedselectPrefecture($value){

       $this->circles  = Circles::where('pre_id',$value)->get();

  }
  public function updatedselectCircle($value){

       $this->REG_centers = REG_center::where('circle_id',$value)->get();

  }

  public function reg_register(){
      $Prefectuers_validate = $this->validate([
          'Reg_name' => 'required',
      ]);

      REG_center::create([
         'pre_id'  =>$this->selectPrefecture,
         'circle_id'  =>$this->selectCircle,
         'Reg_name'  =>$this->Reg_name,
      ]);
      session()->flash('message','Registration center saved ');


  }
       public function deleteReg($id ){
        // return dd($id);
       REG_center::find($id)->delete();
       session()->flash('message', ' گەڕەکەکە بەسەرکەوەتویی سڕایەوە !');

    }
    public function render()
    {
          $array= [

            // 'acircles' => Circles::all(),
            // 'candidates' => candidates::all(),
            'registrationCeneters' => REG_center::with('registPre')->with('registCir')->get(),
            // 'pollingCenters' => polling_center::all(),
        ];
        return view('livewire.registration-center',$array);
    }
}

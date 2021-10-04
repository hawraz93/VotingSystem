<?php

namespace App\Http\Livewire;

use App\Models\Circles;
use Livewire\Component;
use App\Models\candidates;
use App\Models\Prefecture;
use App\Models\REG_center;
use App\Models\polling_center;
use Illuminate\Support\Facades\DB;

class Register extends Component
{
    public $voter_num,$candids_num,$seats_num;
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
           'voter_num'    =>$this->voter_num,
           'candids_num'    =>$this->candids_num,
           'seats_num'    =>$this->seats_num,
        ]);
        session()->flash('message','Circle  saved ');


    }

        public function deletePrefection($id ){
        // return dd($id);
        $cir= Circles::where('pre_id', '=', $id)->exists();
        if ($cir) {
              DB::table('Circles')->where('pre_id', $id)->delete();
                Prefecture::find($id)->delete();
                       session()->flash('message', 'پارێزگاکە بەسەرکەوتەیی سڕایەوە ');
        } else {
            Prefecture::find($id)->delete();
                   session()->flash('message', 'پارێزگاکە بەسەرکەوتەیی سڕایەوە ');
        }

    //    Prefecture::find($id)->delete();
    //    session()->flash('message', 'Post successfully deleted !');

    }
        public function deleteCircle($id ){
        // return dd($id);
       Circles::find($id)->delete();

       session()->flash('message', 'بازنەکە بەسەرکەوتەیی سڕایەوە ');

    }

    public function render()
    {
        $array= [

            'acircles' => Circles::all(),
            // 'candidates' => candidates::all(),
            // 'registrationCeneters' => REG_center::all(),
            // 'pollingCenters' => polling_center::all(),
        ];


        return view('livewire.register',$array);
    }
}
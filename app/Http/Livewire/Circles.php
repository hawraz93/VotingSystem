<?php

namespace App\Http\Livewire;

use App\Models\Circles as ModelsCircles;
use Livewire\Component;
use App\Models\Prefecture;

class Circles extends Component
{
public $cir;
public $Cir_name,$voter_num,$candids_num,$seats_num;
public $selectPrefecture;
        public function mount(){
          $this->prefectures =Prefecture::all();

          $this->cir = collect();
       }

    public function updatedselectPrefecture($value){

         $this->cir = ModelsCircles::where('pre_id',$value)->get();

    }
     public function circle_register(){
        $Prefectuers_validate = $this->validate([
            'Cir_name' => 'required',
            'selectPrefecture'   =>'required'
        ]);
        ModelsCircles::create([
           'Cir_name'  =>$this->Cir_name,
           'pre_id'    =>$this->selectPrefecture,
           'voter_num'    =>$this->voter_num,
           'candids_num'    =>$this->candids_num,
           'seats_num'    =>$this->seats_num,
        ]);
        session()->flash('message','Circle  saved ');


    }

        // public function deletePrefection($id ){
        // // return dd($id);
        // $cir= Circles::where('pre_id', '=', $id)->exists();
        // if ($cir) {
        //       DB::table('Circles')->where('pre_id', $id)->delete();
        //         Prefecture::find($id)->delete();
        //                session()->flash('message', 'پارێزگاکە بەسەرکەوتەیی سڕایەوە ');
        // } else {
        //     Prefecture::find($id)->delete();
        //            session()->flash('message', 'پارێزگاکە بەسەرکەوتەیی سڕایەوە ');
        // }

    //    Prefecture::find($id)->delete();
    //    session()->flash('message', 'Post successfully deleted !');

    // }
        public function deleteCircle($id ){
        // return dd($id);
       ModelsCircles::find($id)->delete();

       session()->flash('message', 'بازنەکە بەسەرکەوتەیی سڕایەوە ');

    }

    public function render()
    {
            $array= [

            'circles' => ModelsCircles::with('circles_pre')->get(),
            // 'candidates' => candidates::all(),
            // 'registrationCeneters' => REG_center::all(),
            // 'pollingCenters' => polling_center::all(),
        ];

        return view('livewire.circles',$array);
    }
}

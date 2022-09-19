<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\BookingAtc;

class TableBookingatc extends Component
{


    public function render()
    {
        return view('livewire.front.table-bookingatc')->layout("layouts.users");
    }

    public function booking($id){

        if(!auth()->user()){
            return redirect()->route('Login');
        }

        $position = BookingAtc::find($id);
        if(!$position->vid){
            $position->vid = auth()->user()->id;
            $position->save();
            $this->emit("OpenSweetalert","Booked successfully!");
        }

    }


    public function getPositionBooking($dependence)
    {
        return BookingAtc::where('dependence', $dependence)
            ->orderBy('order')
            ->get();
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Place;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Review extends Component
{
    public $record,$subject,$review,$place_id,$like;

    public function mount($id){
        $this->record = Place::findOrFail($id);
        $this->place_id = $this->record->id;
    }

    public function render()
    {
    
        return view('livewire.review');
    }
    public function resetInput(){
        $this->subject = null;
        $this->review = null;
        $this->like = null;
        $this->IP = null;
        $this->place_id = null;

    }
    public function store(){
        $this->validate([
            'subject'=>'required|min:5',
            'review'=>'required|min:10',
            'like'=>'required'
        ]);
        \App\Models\Review::create([
         'place_id'=>$this->place_id,
         'user_id'=>Auth::id(),
         'IP'=> $_SERVER['REMOTE_ADDR'],
         'like'=>$this->like,
         'subject'=>$this->subject,
         'review'=>$this->review,
        ]);
        session()->flash('message','mesajınız gönderildi');
        $this->resetInput();
    }
}

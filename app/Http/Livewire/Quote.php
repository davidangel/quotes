<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Quote extends Component
{
    public $text;
    public $author;

    public function random() {
        $quote = DB::table('quotes')->inRandomOrder()->first();
        $this->text = $quote->text;
        $this->author = $quote->author;
    }

    public function render()
    {
        if($this->text == '') {
            $this->random();
        }
        return view('livewire.quote');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Quote as ModelsQuote;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Quote extends Component
{
    public $text;
    public $author;
    public $quoteId;

    public function random() {
        $quote = DB::table('quotes')->inRandomOrder()->first();
        $this->text = $quote->text;
        $this->author = $quote->author;
        $this->quoteId = $quote->id;
    }

    public function getById($id) {
        $quote = DB::table('quotes')->inRandomOrder()->first();
        $this->text = $quote->text;
        $this->author = $quote->author;
        $this->quoteId = $quote->id;
    }

    public function render()
    {

        if($this->quoteId) {
            $quote = ModelsQuote::find($this->quoteId);
            $this->text = $quote->text;
            $this->author = $quote->author;
        } else {
            $this->random();
        }
        return view('livewire.quote');
    }
}

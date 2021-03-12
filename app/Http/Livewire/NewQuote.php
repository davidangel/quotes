<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NewQuote extends Component
{

    public $newText;
    public $newAuthor;

    protected $rules = [
        'newText' => 'required|string|min:3'
    ];

    public function create() {
        $quote = new Quote();
        $quote->text = $this->newText;
        $quote->author = $this->newAuthor;
        $quote->user_id = Auth::user()->id;
        $quote->team_id = Auth::user()->currentTeam->id;
        $quote->save();
        Auth::user()->currentTeam->quotes()->save($quote);
        $this->emit('quoteAdded');
        $this->newText = '';
        $this->newAuthor = '';
    }

    public function render()
    {
        return view('livewire.new-quote');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class QuoteList extends Component
{

    protected $listeners = ['quoteAdded' => 'render', 'quoteDeleted' => 'render'];

    public function quotes()
    {
        return Auth::user()->currentTeam->quotes()->get();
    }

    public function delete($id) {
        $quote = Quote::find($id);
        if(Auth::user()->id === $quote->user_id){
            Quote::destroy($id);
            $this->emit('quoteDeleted');
        }
    }

    public function render()
    {
        return view('livewire.quote-list')->with('quotes', $this->quotes());
    }
}

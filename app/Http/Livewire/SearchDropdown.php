<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = '';
    public $search_results = [];


    public function updatedSearch($newValue)
    {
        if (strlen($this->search) < 3) return;
        $response = Http::get('https://itunes.apple.com/search/?term=' . $this->search . '&limit=10');

        $this->search_results = $response->json()['results'];
    }


    public function render()
    {
        return view('livewire.search-dropdown');
    }
}

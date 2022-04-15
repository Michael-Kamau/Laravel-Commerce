<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactForm extends Component
{
    public $firstname = '';
    public $lastname = '';
    public $email = '';
    public $country = '';
    public $street_address = '';

    public $success_message=null;


    public function submitForm()
    {
        // session()->flash('message', 'Details updated successfully.');

        $this->success_message = 'Details updated successfully.';

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->country = '';
        $this->street_address = '';

    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

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

    protected $rules = [
        'firstname' => 'required|min:6',
        'lastname' => 'required|min:6',
        'email' => 'required|email',
        'country' => 'required|min:3',
        'street_address' => 'min:3',
    ];
    

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


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

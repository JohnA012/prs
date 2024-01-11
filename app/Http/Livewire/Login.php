<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Warehouse;

class Login extends Component
{
    public $error;
    public $warehouse = null;
    public $warehouses;
    public $username;
    public $password;


    public function mount()
    {
        $this->warehouses = Warehouse::all();
    }

    public function updated()
    {
        // dd($this->username);
    }

    public function render()
    {
        return view('livewire.login')->layout('layouts.guest');
    }

    public function authenticateLogin()
    {
        dd($this->username, $this->password);
    }
}

<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;
use App\Models\Company;
use App\Models\StorefrontConfig;
use App\Models\Courier;
use App\Models\Configuration;
use App\Models\User;

class CompanyShow extends Component
{
    public $configs = [];
    public $companies = [];
    public $storefronts = [];
    public $couriers = [];

    public function mount()
    {
        $this->configs = Configuration::all()->toArray();
        $this->companies = Company::all()->toArray();
        $this->storefronts = StorefrontConfig::all()->toArray();
        $this->couriers = Courier::all()->toArray();

        // dd($this->configs,$this->companies,$this->storefronts,$this->couriers);
    }

    public function render()
    {
        return view('livewire.company.company-show');
    }
}

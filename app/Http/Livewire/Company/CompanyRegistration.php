<?php

namespace App\Http\Livewire\Company;

use App\Models\AllConfiguration;
use Livewire\Component;
use App\Models\Company;
use App\Models\StorefrontConfig;
use App\Models\Courier;
use App\Models\Configuration;
use App\Models\User;
use PhpParser\ErrorHandler\Collecting;
use PhpParser\Node\Expr\Cast\Object_;

use function GuzzleHttp\Promise\all;

class CompanyRegistration extends Component
{

    public $currentPage = 1;
    public $success;
    public $configs;

    public $companies = [];
    public $storefronts = [];
    public $couriers = [];

    public $pages = [
        1 => [
            'heading' => 'Personal Information',
            'subheading' => 'Enter your name and email to get started.',
        ],
        2 => [
            'heading' => 'E-Commerce Platform Informations',
            'subheading' => 'eg: Shopyfy, WooCommerce, Magento',
        ],
        3 => [
            'heading' => 'Courier Informations',
            'subheading' => 'eg: DHL, FedEx, TNT',
        ],
        4 => [
            'heading' => 'Configuration Informations(Emails)',
            'subheading' => 'Your email services',
        ],
        5 => [
            'heading' => 'Configuration Informations(SMS)',
            'subheading' => 'Your sms services',
        ],
        6 => [
            'heading' => 'Configuration Informations(Social Media)',
            'subheading' => 'Your social media connects',
        ],
        7 => [
            'heading' => 'Configuration Informations(Order Fullfillment)',
            'subheading' => 'Order configarations',
        ],
    ];

    protected $validationRules = [
        1 => [
            'companies.first_name' => 'required|max:50',
            'companies.last_name' => 'required|max:50',
            'companies.email_address' => 'required|email|unique:companies,email_address',
        ],
        2 => [
            'storefronts.url' => 'required|max:255',
            'storefronts.key' => 'required',
            'storefronts.password' => 'required',
            'storefronts.hook_secret' => 'required',
            'storefronts.city' => 'required',
            'storefronts.country' => 'required',
            'storefronts.mobile' => 'required',
            'storefronts.province' => 'required',
            'storefronts.zipcode' => 'required',
            'storefronts.currency' => 'required',
            'storefronts.exchange_rate' => 'required',
        ],
        3 => [
            'couriers.credentials' => 'required',
            'couriers.return_address' => 'required',
            'couriers.account_id' => 'required',
            'couriers.return_email' => 'required',
            'couriers.logo' => 'nullable',
            'couriers.api_doc_url' => 'required',
        ],
    ];

    // protected $messages = [
    //     'companies.first_name.required' => 'first name is required',
    //     'companies.first_name.max' => 'first name maximum 50 characters',
    //     'companies.last_name.required' => 'last name maximum 50 characters',
    //     'companies.last_name.max' => 'last name maximum 50 characters',
    //     'companies.email_address.unique' => 'email address has already been taken',
    //     'companies.email_address.required' => 'email address required',
    // ];

    protected function rules()
    {
        // collect($this->configs)->each(function($value,$key){
        //     // $this->validationRules[$value['batch_no']]["configs.".$key.".value"] = $value['validation'];
        // });
        // $configs->mapToGroups(fn($item, $key) => [$item['batch_no'] => ["configs.{$key}.value" => $item['validation']]])
        //         ->map(fn($item) => $item->collapse()->toArray())

        collect($this->configs)->each(fn($value,$key) => $this->validationRules[$value['batch_no']]["configs.{$key}.value"] = $value['validation']);

        // for($x = 0; $x < sizeof($this->configs); $x++){
        //     $this->validationRules[$this->configs[$x]['batch_no']]["configs.".$x.".value"] = $this->configs[$x]['validation'];
        // }
        // dd($this->validationRules);
        return $this->validationRules[$this->currentPage];
    }

    public function mount()
    {
        $this->configs = AllConfiguration::all()->toArray();
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,$this->rules());
    }

    public function goToNextPage()
    {
        $this->validate($this->rules());
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function submit()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();
        $this->validate($rules);

        $company = Company::create($this->companies);
        $company->shopify_configs()->create($this->storefronts);
        $company->couriers()->create($this->couriers);
        $company->cofigurations()->createMany($this->configs);

        $this->resetExcept('configs');
        $this->resetValidation();

        $this->success = 'Submission successfully! We will contact you soon';
        // $this->mount();
    }

    public function render()
    {
        return view('livewire.company.company-registration');
    }
}





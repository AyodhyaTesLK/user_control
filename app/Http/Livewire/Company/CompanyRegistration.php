<?php

namespace App\Http\Livewire\Company;

use App\Models\AllConfiguration;
use Livewire\Component;
use App\Models\Company;
use App\Models\StorefrontConfig;
use App\Models\Courier;
use App\Models\Configuration;
use App\Models\User;
use PhpParser\Node\Expr\Cast\Object_;

use function GuzzleHttp\Promise\all;

class CompanyRegistration extends Component
{

    public $currentPage = 1;
    public $success;
    public $configs;

    // company details
    public $first_name;
    public $last_name;
    public $email_address;
    public $addressline1;
    public $addressline2;
    public $city;
    public $country;
    public $hot_line_contact;
    public $operation_email;
    public $helpdesk_email;
    public $customer_support_email;
    public $supply_email;
    public $logo;

    // public ?StorefrontConfig $storefronts = null;
    // public ?Courier $couriers = null;
    // public ?Company $companies = null;

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

    public $validationRules = [
        1 => [
            'first_name' => ['required','max:255'],
            'last_name' => ['required','max:255'],
            'email_address' => ['required', 'email','unique:companies,email_address','max:255'],
        ],
        2 => [
            'storefronts.url' => ['required','max:255'],
            'storefronts.key' => ['required'],
            'storefronts.password' => ['required'],
            'storefronts.hook_secret' => ['required'],
            'storefronts.city' => ['required'],
            'storefronts.country' => ['required'],
            'storefronts.mobile' => ['required'],
            'storefronts.province' => ['required'],
            'storefronts.zipcode' => ['required'],
            'storefronts.currency' => ['required'],
            'storefronts.exchange_rate' => ['required'],
        ],
        3 => [
            'couriers.credentials' => ['required'],
            'couriers.return_address' => ['required'],
            'couriers.account_id' => ['required'],
            'couriers.return_email' => ['required'],
            'couriers.logo' => ['nullable'],
            'couriers.api_doc_url' => ['required'],
        ],
        4 => [
            'configs.0.value' => ['required'],
            'configs.1.value' => ['required'],
            'configs.2.value' => ['required'],
        ],
        5 => [
            'configs.3.value' => ['required'],
            'configs.4.value' => ['required'],
            'configs.5.value' => ['required'],
            'configs.6.value' => ['required'],
            'configs.7.value' => ['required'],
            'configs.8.value' => ['required'],
        ],
        6 => [
            'configs.9.value' => ['required'],
            'configs.10.value' => ['required'],
            'configs.11.value' => ['required'],
        ],
        7 => [
            'configs.12.value' => ['required'],
            'configs.13.value' => ['required'],
            'configs.14.value' => ['required'],
        ],
    ];

    // protected $rules = [
    //     'configs.*.value' => 'nullable',
    //     'first_name' => 'required'|'max:255',
    //     'last_name' => 'required'|'max:255',
    //     'email_address' => 'required'|'email'|'unique:companies,email_address'|'max:255',
    //     'storefronts.url' => 'required',
    //     'storefronts.key' => 'required',
    //     'storefronts.password' => 'required',
    //     'storefronts.hook_secret' => 'required',
    //     'storefronts.city' => 'required',
    //     'storefronts.country' => 'required',
    //     'storefronts.mobile' => 'required',
    //     'storefronts.province' => 'required',
    //     'storefronts.zipcode' => 'required',
    //     'storefronts.currency' => 'required',
    //     'storefronts.exchange_rate' => 'required',
    //     'storefronts.company_id' => 'required',
    //     'couriers.credentials' => 'required',
    //     'couriers.return_address' => 'required',
    //     'couriers.account_id' => 'required',
    //     'couriers.return_email' => 'required',
    //     'couriers.logo' => 'required',
    //     'couriers.api_doc_url' => 'required',
    // ];

    protected function rules()
    {
        // dd($this->validationRules[$this->currentPage]);
        return $this->validationRules[$this->currentPage];
    }

    public function mount()
    {
        $this->configs = AllConfiguration::all()->toArray();
        // dd(gettype($this->configs));
        // $this->validationMaker();
        // $this->storefronts = new StorefrontConfig();
        // $this->couriers = new Courier();
        // $this->companies = new Company();
        // dd($this->validationRules);
    }

    public function validationMaker(){
        for($x = 0; $x < sizeof($this->configs); $x++){
            $this->validationRules["configs.".$x.".value"] = $this->configs[$x]['validation'];
        }
    }

    public function updated($propertyName)
    {
        // dd($propertyName);
        // $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
        $this->validateOnly($propertyName,$this->rules());
    }

    public function goToNextPage()
    {
        // dd($this->rules());
        // $this->validate($this->validationRules[$this->currentPage]);
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

        $company = Company::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email_address' => $this->email_address,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email_address' => $this->email_address,
            'addressline1' => $this->addressline1,
            'addressline2' => $this->addressline2,
            'city' => $this->city,
            'country' => $this->country,
            'hot_line_contact' => $this->hot_line_contact,
            'operation_email' => $this->operation_email,
            'helpdesk_email' => $this->helpdesk_email,
            'customer_support_email' => $this->customer_support_email,
            'supply_email' => $this->supply_email,
            'logo' => $this->logo,
        ]);

        // $company->create($this->companies->toArray());
        // dd($this->configs->toArray());
        // dd($this->storefronts->toArray());
        $company->shopify_configs()->create($this->storefronts);
        $company->couriers()->create($this->couriers);
        $company->cofigurations()->createMany($this->configs);

        $this->reset();
        $this->resetValidation();

        $this->success = 'Submission successfully! We will contact you soon';
    }

    public function render()
    {
        return view('livewire.company.company-registration');
    }
}





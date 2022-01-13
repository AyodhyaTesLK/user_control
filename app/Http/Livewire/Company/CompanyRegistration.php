<?php

namespace App\Http\Livewire\Company;

use App\Models\AllConfiguration;
use Livewire\Component;
use App\Models\Company;
use App\Models\ShopifyConfig;
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

    // courier details 
    // public $courier_credentials;
    // public $courier_return_address;
    // public $courier_account_id;
    // public $courier_return_email;
    // public $courier_api_doc_url;
    // public $courier_logo;

    public ?ShopifyConfig $storefronts = null;
    public ?Courier $couriers = null;

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

    private $validationRules = [
        1 => [
            'first_name' => ['required','max:255'],
            'last_name' => ['required','max:255'],
            'email_address' => ['required', 'email', 'unique:companies,email_address','max:255'],
        ],
        2 => [
            'password' => ['required', 'string', 'min:8'],
            'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        ],
        3 => [
            'password' => ['required', 'string', 'min:8'],
            'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        ],
        4 => [
            'password' => ['required', 'string', 'min:8'],
            'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        ],
        5 => [
            'password' => ['required', 'string', 'min:8'],
            'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        ],
        6 => [
            'password' => ['required', 'string', 'min:8'],
            'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        ],
        7 => [
            'password' => ['required', 'string', 'min:8'],
            'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        ],
    ];

    protected $rules = [
        // 'configs.*.value' => 'nullable',
        'storefronts.url' => 'required',
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
        'storefronts.company_id' => 'required',
        'couriers.credentials' => 'required',
        'couriers.return_address' => 'required',
        'couriers.account_id' => 'required',
        'couriers.return_email' => 'required',
        'couriers.logo' => 'required',
        'couriers.api_doc_url' => 'required',
    ];

    protected function rules()
    {
        // return [
        //     'name' => 'required|min:6',
        //     'email' => ['required', 'email', 'not_in:' . auth()->user()->email],
        // ];
        $this->validationMaker();
        return $this->rules;
    }

    


    public function mount()
    {
        $this->configs = AllConfiguration::all();
        $this->validationMaker();
        // dd($this->rules);
        // $dynamic_validation = array_merge($this->rules,json_decode($this->configs[0]['validation'],true));
        // dd($dynamic_validation);

        // dd(json_decode($this->configs[0]['validation'],true));
        $this->storefronts = new ShopifyConfig();
        $this->couriers = new Courier();
        // dd($this->storefronts);
        // dd($this->configs->toArray(), $this->currentPage);
        // dd($configs[0]['batch_no']);
    }

    public function validationMaker(){

        for($x = 0; $x < sizeof($this->configs); $x++){
            $this->rules["configs.".$x.".value"] = $this->configs[$x]['validation'];
        }
        
    }

    public function updated($propertyName)
    {
        // dd($this->configs);
        // $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }

    public function goToNextPage()
    {
        // $this->validate($this->validationRules[$this->currentPage]);
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
        // $rules = collect($this->validationRules)->collapse()->toArray();

        // $this->validate($rules);

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

        // dd($this->storefronts);
        // dd($this->storefronts->toArray());
        $company->shopify_configs()->create($this->storefronts->toArray());
        $company->couriers()->create($this->couriers->toArray());
        // $company = ShopifyConfig::create($this->storefronts);
        // $company->shopify_configs()->createOne($this->storefronts);

        // ShopifyConfig::create([
        //     'storefront_url' =>$this->storefront_url,
        //     'storefront_key' =>$this->storefront_key,
        //     'storefront_password' =>$this->storefront_password,
        //     'storefront_hook_secret' =>$this->storefront_hook_secret,
        //     'storefront_city' =>$this->storefront_city,
        //     'storefront_country' =>$this->storefront_country,
        //     'storefront_mobile' =>$this->storefront_mobile,
        //     'storefront_province' =>$this->storefront_province,
        //     'storefront_zipcode' =>$this->storefront_zipcode,
        //     'storefront_currency' =>$this->storefront_currency,
        //     'storefront_exchange_rate' =>$this->storefront_exchange_rate,
        //     // 'company_id' => $company->id
        // ]);

        // Courier::create([
        //     'courier_credentials' => $this->courier_credentials,
        //     'courier_return_address' => $this->courier_return_address,
        //     'courier_account_id' => $this->courier_account_id,
        //     'courier_return_email' => $this->courier_return_email,
        //     'courier_logo' => $this->courier_logo,
        //     'courier_api_doc_url' => $this->courier_api_doc_url,
        // ]);

        $company->cofigurations()->createMany($this->configs->toArray());

        

        $this->reset();
        $this->resetValidation();

        $this->success = 'Submission successfully! We will contact you soon';
    }

    public function render()
    {
        return view('livewire.company.company-registration');
    }
}





<?php

namespace App\Http\Livewire\Company;
use Livewire\Component;
use App\Models\Company;
use App\Models\ShopifyConfig;
use App\Models\Courier;
use App\Models\Configuration;
use App\Models\User;

class CompanyRegistration extends Component
{
    public $currentPage = 1;
    public $success;

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

    //storefront details
    public $storefront_url;
    public $storefront_key;
    public $storefront_password;
    public $storefront_hook_secret;
    public $storefront_city;
    public $storefront_country;
    public $storefront_province;
    public $storefront_zipcode;
    public $storefront_mobile;
    public $storefront_currency;
    public $storefront_exchange_rate;

    // courier details 
    public $courier_credentials;
    public $courier_return_address;
    public $courier_account_id;
    public $courier_return_email;
    public $courier_api_doc_url;
    public $courier_logo;

    // Configuration Informations(Emails)
    public $configuration = [
        "smtp_pop_imap",
        "email_config_username",
        "email_password",
        "sms_api_base_url",
        "sms_configuration_username",
        "sms_configuration_password",
        "sms_configuration_key",
        "sms_configuration_mask",
        "sms_api_document_url",
        "facebook_url",
        "instagram_url",
        "twitter_url",
        "picklist_item_limit",
        "picklist_order_limit",
        "cod_max_limit_to_approve",
    ];

    public $smtp_pop_imap;
    public $email_config_username;
    public $email_password;

    // Configuration Informations(SMS)
    public $sms_api_base_url;
    public $sms_configuration_username;
    public $sms_configuration_password;
    public $sms_configuration_key;
    public $sms_configuration_mask;
    public $sms_api_document_url;

    // social media urls
    public $facebook_url;
    public $instagram_url;
    public $twitter_url;

    // Configuration Informations(Order Fullfillment)
    public $picklist_item_limit;
    public $picklist_order_limit;
    public $cod_max_limit_to_approve;


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
        // 2 => [
        //     'password' => ['required', 'string', 'min:8'],
        //     'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        // ],
        // 3 => [
        //     'password' => ['required', 'string', 'min:8'],
        //     'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        // ],
        // 4 => [
        //     'password' => ['required', 'string', 'min:8'],
        //     'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        // ],
        // 5 => [
        //     'password' => ['required', 'string', 'min:8'],
        //     'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        // ],
        // 6 => [
        //     'password' => ['required', 'string', 'min:8'],
        //     'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        // ],
        // 7 => [
        //     'password' => ['required', 'string', 'min:8'],
        //     'confirmPassword' => ['required', 'string', 'same:password', 'min:8'],
        // ],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }

    public function goToNextPage()
    {
        $this->validate($this->validationRules[$this->currentPage]);
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

        $configuration = [
            ["smtp_pop_imap",$this->smtp_pop_imap,"description","default","domain"],
            ["email_config_username",$this->email_config_username,"description","default","domain"],
            ["email_password",$this->email_password,"description","default","domain"],
            ["sms_api_base_url",$this->sms_api_base_url,"description","default","domain"],
            ["sms_configuration_username",$this->sms_configuration_username,"description","default","domain"],
            ["sms_configuration_password",$this->sms_configuration_password,"description","default","domain"],
            ["sms_configuration_key",$this->sms_configuration_key,"description","default","domain"],
            ["sms_configuration_mask",$this->sms_configuration_mask,"description","default","domain"],
            ["sms_api_document_url",$this->sms_api_document_url,"description","default","domain"],
            ["facebook_url",$this->facebook_url,"description","default","domain"],
            ["instagram_url",$this->instagram_url,"description","default","domain"],
            ["twitter_url",$this->twitter_url,"description","default","domain"],
            ["picklist_item_limit",$this->picklist_item_limit,"description","default","domain"],
            ["picklist_order_limit",$this->picklist_order_limit,"description","default","domain"],
            ["cod_max_limit_to_approve",$this->cod_max_limit_to_approve,"description","default","domain"],
        ];

        // dd($configuration[0][0]);

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

        // $company->shopify_configs()->create()

        ShopifyConfig::create([
            'storefront_url' =>$this->storefront_url,
            'storefront_key' =>$this->storefront_key,
            'storefront_password' =>$this->storefront_password,
            'storefront_hook_secret' =>$this->storefront_hook_secret,
            'storefront_city' =>$this->storefront_city,
            'storefront_country' =>$this->storefront_country,
            'storefront_mobile' =>$this->storefront_mobile,
            'storefront_province' =>$this->storefront_province,
            'storefront_zipcode' =>$this->storefront_zipcode,
            'storefront_currency' =>$this->storefront_currency,
            'storefront_exchange_rate' =>$this->storefront_exchange_rate,
            // 'company_id' => $company->id
        ]);

        Courier::create([
            'courier_credentials' => $this->courier_credentials,
            'courier_return_address' => $this->courier_return_address,
            'courier_account_id' => $this->courier_account_id,
            'courier_return_email' => $this->courier_return_email,
            'courier_logo' => $this->courier_logo,
            'courier_api_doc_url' => $this->courier_api_doc_url,
        ]);

        for($x = 0; $x < sizeof($configuration); $x++){
            $y = 0 ;
            Configuration::create([
                'key' => $configuration[$x][$y],
                'value' => $configuration[$x][$y+1],
                'description' => $configuration[$x][$y+2],
                'default' => $configuration[$x][$y+3],
                'domain' => $configuration[$x][$y+4],
            ]);
        }

        

        $this->reset();
        $this->resetValidation();

        $this->success = 'Submission successfully! We will contact you soon';
    }

    public function render()
    {
        return view('livewire.company.company-registration');
    }
}





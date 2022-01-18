<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Configuration;
use App\Models\Courier;
use App\Models\StorefrontConfig;
use App\Models\Company;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        // Configuration::factory(10)->create();
        // Courier::factory(10)->create();
        // StorefrontConfig::factory(10)->create();
        // Company::factory(10)->create();

        // $table->string('key')->nullable();
        //     $table->string('title')->nullable();
        //     $table->string('description')->nullable();
        //     $table->string('default')->nullable(); 
        //     $table->string('domain')->nullable();  //email,sms,social media
        //     $table->string('batch_no')->nullable(); 
        //     $table->string('type')->nullable();

        //     <input type="radio" name="" id="">
        //     <select name="" id=""></select>

        //     ['key1' => 'val1','key2' => 'val2','key3' => 'val3',]

        $configurations = [
            [
                "key" =>"smtp_pop_imap",
                "lable" => "SMTP and POP/IMAP server names",
                "description" => "description",
                "default" => "default",
                "domain" => "email",
                "batch_no" => 4,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "email_config_username",
                "lable" => "Username",
                "description" => "description",
                "default" => "default",
                "domain" => "email",
                "batch_no" => 4,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "email_password",
                "lable" => "Password",
                "description" => "description",
                "default" => "default",
                "domain" => "email",
                "batch_no" => 4,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "sms_api_base_url",
                "lable" => "URL",
                "description" => "description",
                "default" => "default",
                "domain" => "sms",
                "batch_no" => 5,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "sms_configuration_username",
                "lable" => "Username",
                "description" => "description",
                "default" => "default",
                "domain" => "sms",
                "batch_no" => 5,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "sms_configuration_password",
                "lable" => "Password",
                "description" => "description",
                "default" => "default",
                "domain" => "sms",
                "batch_no" => 5,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "sms_configuration_key",
                "lable" => "Key",
                "description" => "description",
                "default" => "default",
                "domain" => "sms",
                "batch_no" => 5,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "sms_configuration_mask",
                "lable" => "Mask",
                "description" => "description",
                "default" => "default",
                "domain" => "sms",
                "batch_no" => 5,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "sms_api_document_url",
                "lable" => "API Document URL",
                "description" => "description",
                "default" => "default",
                "domain" => "sms",
                "batch_no" => 5,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "facebook_url",
                "lable" => "Facebook URL",
                "description" => "description",
                "default" => "default",
                "domain" => "social_media",
                "batch_no" => 6,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "instagram_url",
                "lable" => "Instagram URL",
                "description" => "description",
                "default" => "default",
                "domain" => "social_media",
                "batch_no" => 6,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "twitter_url",
                "lable" => "Twitter URL",
                "description" => "description",
                "default" => "default",
                "domain" => "social_media",
                "batch_no" => 6,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "picklist_item_limit",
                "lable" => "Pick list item limit",
                "description" => "description",
                "default" => "default",
                "domain" => "social_media",
                "batch_no" => 7,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "picklist_order_limit",
                "lable" => "Pick list order limit",
                "description" => "description",
                "default" => "default",
                "domain" => "social_media",
                "batch_no" => 7,
                "type" => "text",
                "validation" => "required",
            ],
            [
                "key" => "cod_max_limit_to_approve",
                "lable" => "Cash on delivery maximum value to auto
                approve an order",
                "description" => "description",
                "default" => "default",
                "domain" => "social_media",
                "batch_no" => 7,
                "type" => "text",
                "validation" => "required",
            ],
        ];

      
        DB::table('all_configurations')->insert($configurations);
      
        // DB::table('users')->insert([
        //     'key' => "",
        //     'email' => Str::random(10).'@gmail.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}

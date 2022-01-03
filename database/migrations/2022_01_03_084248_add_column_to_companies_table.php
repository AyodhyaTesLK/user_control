<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameColumnToCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->string('name');
            $table->string('logo');
            $table->string('country');
            $table->string('city');
            $table->string('dir_path');
            $table->string('url');
            $table->string('street_address');
            
        
            //CONFIGURATION
            //company id
            //key
            //value
            //description
            //default
            //domain
            // $table->string('email_server');
            // $table->string('email_username');
            // $table->string('email_password');

            // $table->string('hot_line_contact');
            // $table->string('operation_email');
            // $table->string('helpdesk_email');
            // $table->string('customer_support_email');
            // $table->string('supply_email');

            // $table->string('facebook_url');
            // $table->string('twitter_url');
            // $table->string('instagram_url');

            

            // $table->string('picklist_item_limit');
            // $table->string('picklist_order_limit');
            // $table->string('cod_max_limit_to_approve');

            // $table->string('sms_api_url');
            // $table->string('sms_username');
            // $table->string('sms_password');
            // $table->string('sms_key');
            // $table->string('sms_mask');
            // $table->string('sms_document');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('logo');
            $table->dropColumn('dir_path');
            $table->dropColumn('url');
        });
    }
}

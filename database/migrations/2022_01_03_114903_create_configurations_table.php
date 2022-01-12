<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configurations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('key')->nullable();
            $table->string('value')->nullable();
            $table->string('description')->nullable();
            $table->string('default')->nullable();
            $table->string('domain')->nullable();
            $table->foreignId('company_id')->nullable();
            // $table->foreign('company_id')->references('id')->on('companies')->onDelete('CASCADE')->onUpdate('CASCADE');

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
        Schema::dropIfExists('configurations');
    }
}

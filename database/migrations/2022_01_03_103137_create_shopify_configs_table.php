<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopifyConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopify_configs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('shopify_url');
            $table->string('shopify_key');
            $table->string('shopify_password');
            $table->string('shopify_hook_secret');
            $table->string('shopify_store_city');
            $table->string('shopify_country');
            $table->string('shopify_phone');
            $table->string('shopify_province');
            $table->string('shopify_zip_code');
            $table->string('shopify_currency');
            $table->string('shopify_exchange_rate');
            $table->foreignId('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('default')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shopify_configs');
    }
}

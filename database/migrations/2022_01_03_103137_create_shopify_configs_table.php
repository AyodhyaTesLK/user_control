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
            $table->string('storefront_url')->nullable();
            $table->string('storefront_key')->nullable();
            $table->string('storefront_password')->nullable();
            $table->string('storefront_hook_secret')->nullable();
            $table->string('storefront_city')->nullable();
            $table->string('storefront_country')->nullable();
            $table->string('storefront_mobile')->nullable();
            $table->string('storefront_province')->nullable();
            $table->string('storefront_zipcode')->nullable();
            $table->string('storefront_currency')->nullable();
            $table->string('storefront_exchange_rate')->nullable();
            $table->foreignId('company_id')->nullable();
            // $table->foreign('company_id')->references('id')->on('companies')->onDelete('CASCADE')->onUpdate('CASCADE');
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

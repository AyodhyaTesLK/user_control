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
            $table->string('url')->nullable();
            $table->string('key')->nullable();
            $table->string('password')->nullable();
            $table->string('hook_secret')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('mobile')->nullable();
            $table->string('province')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('currency')->nullable();
            $table->string('exchange_rate')->nullable();
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

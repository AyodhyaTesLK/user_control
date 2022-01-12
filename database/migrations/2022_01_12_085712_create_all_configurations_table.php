<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('all_configurations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('key')->nullable();
            $table->string('lable')->nullable();
            $table->string('description')->nullable();
            $table->string('default')->nullable(); 
            $table->string('domain')->nullable();  //email,sms,social media
            $table->string('batch_no')->nullable(); 
            $table->string('type')->nullable();
            $table->string('options')->nullable();
                // 1 = personal info,
                // 2 = storefront info
                // 3 = shopify info
                // 4 = email info
                // 5 = sms onfo
                // 6 = social media
                // 7 order full fillment info
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_configurations');
    }
}

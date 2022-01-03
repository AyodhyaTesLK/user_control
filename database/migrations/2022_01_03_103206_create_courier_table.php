<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courier', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('courier_credentials');
            $table->string('courier_return_address');
            $table->string('courier_account_id');
            $table->string('courier_return_email');
            $table->string('courier_logo');
            $table->string('courier_api_document');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courier');
    }
}

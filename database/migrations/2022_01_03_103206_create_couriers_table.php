<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('couriers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('courier_credentials')->nullable();
            $table->string('courier_return_address')->nullable();
            $table->string('courier_account_id')->nullable();
            $table->string('courier_return_email')->nullable();
            $table->string('courier_logo')->nullable();
            $table->string('courier_api_doc_url')->nullable();
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
        Schema::dropIfExists('couriers');
    }
}

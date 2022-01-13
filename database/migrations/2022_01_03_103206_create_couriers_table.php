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
            $table->string('credentials')->nullable();
            $table->string('return_address')->nullable();
            $table->string('account_id')->nullable();
            $table->string('return_email')->nullable();
            $table->string('logo')->nullable();
            $table->string('api_doc_url')->nullable();
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

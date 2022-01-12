<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email_address');
            $table->string('addressline1')->nullable();
            $table->string('addressline2')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('hot_line_contact')->nullable();
            $table->string('operation_email')->nullable();
            $table->string('helpdesk_email')->nullable();
            $table->string('customer_support_email')->nullable();
            $table->string('supply_email')->nullable();
            $table->string('logo')->nullable();
            $table->string('dir_path')->nullable();
            $table->string('url')->nullable();
            
            $table->string('status')->nullable();   //register,pending,process,live,disable 
        });

        // Schema::table('users', function (Blueprint $table) {
        //     $table->foreign('company_id')->references('id')->on('companies')->onDelete('SET NULL')->onUpdate('CASCADE');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_datails', function (Blueprint $table) {
            $table->id();
            $table->string('companyName',100);
            $table->string('companyEmail',100);
            $table->string('phone',100);
            $table->string('address',100);
            $table->string('logo',100);
            
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_datails');
    }
};

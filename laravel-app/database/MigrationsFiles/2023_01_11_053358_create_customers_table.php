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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customername');
            $table->string('officeaddress');
            $table->string('contactpersonname');
            $table->string('contactnumber');
            $table->string('emailid');
            $table->integer('enterByID');
            $table->string('enterByName');
            $table->decimal('customerprevbalance',20,2)->default(0.00);
            $table->decimal('customercurrentbalance',20,2)->default(0.00);
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
        Schema::dropIfExists('customars');
    }
};

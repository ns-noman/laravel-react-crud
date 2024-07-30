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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('supplier');
            $table->string('contactperson');
            $table->string('officeaddress');
            $table->string('factoryaddress');
            $table->string('contactno');
            $table->string('email')->nullable();
            $table->decimal('previousblance',20,2)->default(0.00);
            $table->decimal('currentblance',20,2)->default(0.00);
            $table->string('BankAccountDetails');
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
        Schema::dropIfExists('suppliers');
    }
};

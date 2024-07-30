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
        Schema::create('customer_payment_lists', function (Blueprint $table) {
            
            $table->id();
            $table->integer('salesShortID')->nullable();
            $table->string('invoiceNo')->nullable();
            $table->integer('custID');
            $table->string('custName');
            $table->string('date');
            $table->integer('paymentByID');
            $table->string('paymentByName');
            $table->decimal('paymentAmount',20,2)->default(00.0);
            $table->string('note')->nullable();
            $table->decimal('custPrevBal',20,2)->default(00.0);
            $table->decimal('duesAmount',20,2)->default(00.0);
            $table->decimal('custCurBal',20,22)->default(00.00);
            $table->integer('status');
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
        Schema::dropIfExists('customer_payment_lists');
    }
};

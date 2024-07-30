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
        Schema::create('supplier_payment_lists', function (Blueprint $table) {
            $table->id();
            $table->integer('supplierID');
            $table->string('supplierName');
            $table->string('paymentDate');
            $table->integer('paymentByID');
            $table->string('paymentByName');
            $table->decimal('paymentAmount',20,2);
            $table->string('document')->nullable();
            $table->string('note')->nullable();
            $table->decimal('supPrevBalance',20,2)->default(00.0);
            $table->decimal('supCurrBalance',20,2)->default(00.00);
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
        Schema::dropIfExists('supplier_payment_lists');
    }
};

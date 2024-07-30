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
        Schema::create('customer_ledgers', function (Blueprint $table) {
            $table->id();
            $table->integer('custID');
            $table->string('custName');
            $table->integer('createdByID');
            $table->string('createdByName');
            $table->integer('paymentID')->nullable()->default(null);
            $table->integer('saleID')->nullable()->default(null);
            $table->string('date');
            $table->string('particular')->default('Previous Balance');
            $table->decimal('grandTotal',20,2)->default(00.00);
            $table->decimal('paidAmount',20,2)->default(00.00);
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
        Schema::dropIfExists('customer_ledgers');
    }
};

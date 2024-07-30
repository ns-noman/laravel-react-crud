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
        Schema::create('sales_shorts', function (Blueprint $table) {
            $table->id();
            $table->integer('customerID');
            $table->string('customerName');
            $table->integer('createdByID');
            $table->string('createdByName');
            $table->string('date');
            $table->string('invNumber');
            $table->decimal('grandTotal',20,2);
            $table->decimal('receivedAmount',20,2);
            $table->decimal('duesAmount',20,2);
            $table->string('address');
            $table->integer('status');
            $table->integer('deliveryStatus')->default(0);
            $table->string('note')->nullable();
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
        Schema::dropIfExists('sales_shorts');
    }
};

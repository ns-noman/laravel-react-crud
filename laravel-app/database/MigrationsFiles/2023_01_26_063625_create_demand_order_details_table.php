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
        Schema::create('demand_order_details', function (Blueprint $table) {
            $table->id();
            $table->integer('dOrderID');
            $table->string('invoiceNum');
            $table->integer('productID');
            $table->string('productName');
            $table->integer('quantity');
            $table->integer('rate');
            $table->decimal('totalAmount',20,2);
            $table->integer('receiveQuantity')->default(0);
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
        Schema::dropIfExists('demand_order_details');
    }
};

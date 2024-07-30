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
        Schema::create('demand_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('supplierID');
            $table->string('supplierName');
            $table->string('invoiceNum')->unique();
            $table->string('date');
            $table->decimal('grandTotal',20,2);
            $table->integer('createdByID');
            $table->string('createdByName');
            $table->string('note')->nullable();
            $table->integer('entryStatus');
            $table->integer('deliveryStatus');
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
        Schema::dropIfExists('demand_orders');
    }
};

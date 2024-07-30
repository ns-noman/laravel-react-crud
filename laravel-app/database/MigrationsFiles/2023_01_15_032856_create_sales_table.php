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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('salesShortID');
            $table->integer('supplierID');
            $table->string('invNumber');
            $table->integer('proID');
            $table->string('proName');
            $table->integer('prodQty',20,2);
            $table->decimal('prodRate',20,2);
            $table->decimal('totalPrice',20,2);
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
        Schema::dropIfExists('sales');
    }
};

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
        Schema::create('transport_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('invNo')->default('-');
            $table->decimal('income',20,2)->default(0.00);
            $table->string('expenseHead',100)->default('-');
            $table->decimal('expenseAmount',20,2)->default(0.00);
            $table->string('date',100);
            $table->integer('entryByID');
            $table->string('entryByName',100);
            $table->string('note')->nullable();
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
        Schema::dropIfExists('transport_transactions');
    }
};

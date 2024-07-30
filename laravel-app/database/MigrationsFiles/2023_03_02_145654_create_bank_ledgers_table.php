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
        Schema::create('bank_ledgers', function (Blueprint $table) {
            $table->id();
            $table->integer('bankID');
            $table->string('bankName');
            $table->string('accountNo');
            $table->integer('createdByID');
            $table->string('createdByName');
            $table->decimal('deposite',20,2)->defaul(0.00);
            $table->decimal('withdrawal',20,22)->defaul(0.00);
            $table->string('date');
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
        Schema::dropIfExists('bank_ledgers');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid');
            $table->unsignedInteger('paymentable_id')->nullable();
            $table->string('paymentable_type')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('selected_amount')->nullable();
            $table->string('selected_currency')->nullable();
            $table->integer('amount_rai')->nullable();
            $table->string('brainblocks_token')->nullable();
            $table->string('send_block')->nullable();
            $table->string('sender')->nullable();
            $table->boolean('success')->nullable();
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
        Schema::dropIfExists('payments');
    }
}

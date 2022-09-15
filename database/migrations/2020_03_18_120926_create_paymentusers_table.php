<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentusers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_id')->nullable()->default(null);
            $table->string('name', 255);
            $table->string('blood_group', 10);
            $table->integer('termsAccepted')->default(1);
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
        Schema::dropIfExists('paymentusers');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentpartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentparts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payment_id')->nullable()->default(null);
            $table->integer('ticket_id')->nullable()->default(null);
            $table->integer('quantity')->unsigned()->default(1);
            $table->string('amount', 10);
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
        Schema::dropIfExists('paymentparts');
    }
}

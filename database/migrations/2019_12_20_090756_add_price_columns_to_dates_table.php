<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPriceColumnsToDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dates', function (Blueprint $table) {
            $table->integer('cost')->after('event_end_date');
            $table->integer('diff_cost_one')->after('cost');
            $table->string('diff_cost_one_label', 50)->after('diff_cost_one');
            $table->integer('diff_cost_two')->after('diff_cost_one_label');
            $table->string('diff_cost_two_label', 50)->after('diff_cost_two');
            $table->integer('diff_cost_three')->after('diff_cost_two_label');
            $table->string('diff_cost_three_label', 50)->after('diff_cost_three');
            $table->string('payment_link', 200)->index()->after('diff_cost_three_label');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dates', function (Blueprint $table) {
            $table->dropColumn('cost');
            $table->dropColumn('diff_cost_one');
            $table->dropColumn('diff_cost_one_label');
            $table->dropColumn('diff_cost_two');
            $table->dropColumn('diff_cost_two_label');
            $table->dropColumn('diff_cost_three');
            $table->dropColumn('diff_cost_three_label');
            $table->dropColumn('payment_link');
        });
    }
}

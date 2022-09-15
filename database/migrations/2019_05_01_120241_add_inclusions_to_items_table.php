<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddInclusionsToItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->string('banner',255)->after('image');
            $table->string('inclusions', 1000)->after('banner');
            $table->string('exclusions', 1000)->after('inclusions');
            $table->string('difficulty_level', 100)->after('exclusions');
            $table->integer('sleeping_bag_rental')->after('difficulty_level');
            $table->integer('cost')->after('sleeping_bag_rental');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn('banner');
            $table->dropColumn('inclusions');
            $table->dropColumn('exclusions');
            $table->dropColumn('difficulty_level');
            $table->dropColumn('sleeping_bag_rental');
            $table->dropColumn('cost');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //This deletes the column
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('description');
        });

        // and this creates the new column with the new data type.
        Schema::table('categories', function(Blueprint $table){
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('categories', function(Blueprint $table){
            $table->dropColumn('description');
        });
    }
}

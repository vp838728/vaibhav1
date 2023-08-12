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
        Schema::table('products', function (Blueprint $table) {
            $table->string('qty');
            $table->string('taxs');
            $table->tinyInteger('selling_price');
            $table->enum('status',['Block','Unblock'])->default('Unblock');
            $table->tinyInteger('treading');
            $table->mediumtext('meta_title');
            $table->mediumtext('meta_keywords');
            $table->mediumtext('meta_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};

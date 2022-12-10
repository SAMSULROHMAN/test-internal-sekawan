<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdDriverColumnInRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('requests', function (Blueprint $table) {
            $table->integer('id_drivers')->unsigned()->nullable();
            $table->foreign('id_drivers')
            ->references('id')
            ->on('drivers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requests', function (Blueprint $table) {
            $table->integer('id_drivers')->unsigned()->nullable();
            $table->foreign('id_drivers')
            ->references('id')
            ->on('drivers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }
}

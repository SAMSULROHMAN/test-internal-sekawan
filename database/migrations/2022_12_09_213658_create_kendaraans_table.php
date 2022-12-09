<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kendaraan');
            $table->string('type_kendaraan');
            $table->timestamps();
        });

        // Schema::table('requests',function(Blueprint $table){
        //     $table->foreign('id_kendaraan')
        //     ->references('id')
        //     ->on('kendaraan')
        //     ->onDelete('cascade')
        //     ->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop FK
        // Schema::table('requests',function(Blueprint $table){
        //     $table->dropForeign('kendaraan_id_kendaraan_foreign');
        // });

        Schema::dropIfExists('kendaraan');
    }
}

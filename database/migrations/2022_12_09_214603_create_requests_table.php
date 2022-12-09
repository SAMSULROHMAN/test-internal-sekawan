<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('approval',['approve','decline']);
            $table->timestamps();
        });

        Schema::table('users',function(Blueprint $table){
            $table->foreign('id_request')
                ->references('id')
                ->on('requests')
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
        // Drop FK
        Schema::table('users',function(Blueprint $table){
            $table->dropForeign('users_id_request_foreign');
        });

        Schema::dropIfExists('requests');
    }
}

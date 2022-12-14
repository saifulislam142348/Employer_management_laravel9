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
        Schema::create('attendences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->dateTime('in_time')->nullable();	
            $table->string('month');
            $table->dateTime('out_time')->nullable();	
            $table->tinyInteger('status')->default(0)->comment('inactive=0 active=1');
            $table->string('create_by')->default('none');
            $table->string('update_by')->default('none');
            $table->string('delete_by')->default('none');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendences');
    }
};

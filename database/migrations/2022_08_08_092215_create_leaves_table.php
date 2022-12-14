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
        Schema::create('leaves', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('user_id')->unique();
             $table->string('month');
             $table->unsignedBigInteger('leave')->nullable();	
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
        Schema::dropIfExists('leaves');
    }
};

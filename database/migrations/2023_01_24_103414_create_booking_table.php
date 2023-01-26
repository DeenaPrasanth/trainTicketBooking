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
        Schema::create('booking', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('passenger_id');
            $table->integer('availability_id')->nullable();
            $table->string('status')->nullable();
            $table->integer('train_id')->nullable();
            $table->integer('cancelled')->default(0);
            $table->integer('confirm')->default(0);
            $table->integer('pending')->default(1);
            // $table->foreign('passenger_id')->references('id')->on('passengers')->onDelete('cascade');
            // $table->foreign('availability_id')->references('id')->on('availability')->onDelete('cascade');
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
        Schema::dropIfExists('booking');
    }
};

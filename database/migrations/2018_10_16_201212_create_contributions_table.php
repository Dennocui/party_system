<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contributions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_code');
            $table->string('amount');

            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members');

            $table->integer('party_id')->unsigned();
            $table->foreign('party_id')->references('id')->on('parties');

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
        Schema::dropIfExists('contributions');
    }
}

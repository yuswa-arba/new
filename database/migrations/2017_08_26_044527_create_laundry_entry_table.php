<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaundryEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laundry_entry', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_register')->nullable();
            $table->date('date')->nullable();
            $table->string('amount')->nullable();
            $table->string('type')->nullable();
            $table->string('total_payment')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laundry_entry');
    }
}

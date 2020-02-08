<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('customer_name');
            $table->string('inquiry_number')->nullable();
            $table->enum('type', ['inquiry', 'normal'])->default('normal');
            $table->unsignedInteger('amount')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->string('material')->nullable();
            $table->unsignedInteger('weight')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}

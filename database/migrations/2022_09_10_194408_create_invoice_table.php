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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->biginteger('phone');
            $table->string('address');
            $table->string('email')->unique();
            $table->foreignId('serid')->nullable()->references('id')->on('services')->onDelete(null);
            $table->string('service');
            $table->integer('discount');
            $table->integer('total');
            $table->timestamp('date')->useCurrent();
            
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
};

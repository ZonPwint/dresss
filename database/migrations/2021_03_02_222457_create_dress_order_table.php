<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDressOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dress_order', function (Blueprint $table) {
            $table->id();
            $table->string('qty');
            $table->foreignId('dress_id')
                   ->reference('id')->on('dresses')
                   ->onDelete('cascade');
            $table->foreignId('order_id')
                   ->reference('id')->on('orderdetails')
                   ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dress_order');
    }
}

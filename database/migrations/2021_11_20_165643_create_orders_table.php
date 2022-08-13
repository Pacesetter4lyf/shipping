<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('phone');
            $table->decimal('weight');
            $table->decimal('distance');
            $table->text('freight');
            $table->text('dropoff');
            $table->text('pickup');
            $table->text('status');
            $table->text('trackingid')->nullable();
            $table->dateTime('transit_time')->nullable();
            $table->dateTime('completed_time')->nullable();
            $table->text('extra1')->nullable();
            $table->text('extra2')->nullable();
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
        Schema::dropIfExists('orders');
    }
}

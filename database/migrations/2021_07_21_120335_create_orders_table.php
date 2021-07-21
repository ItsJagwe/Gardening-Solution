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
            $table->string('flat');
            $table->string('area');
            $table->string('landmark');
            $table->string('pincode');
            $table->string('phone');
            $table->date('date');
            $table->string('pack_type');
            $table->string('email');
            $table->string('payment');
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('user_id');

            //foreign key
            $table->foreign('service_id')->reference('id')->on('services')->onDelete('cascade');
            $table->foreign('user_id')->reference('id')->on('users')->onDelete('SET NULL');

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

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
            $table->string('name_product');
            $table->integer('prix_product');
            $table->integer('remise_product');
            $table->integer('quantite_product');
            $table->string('mode_payment');
            $table->string('adresse_user');
            $table->string('photo_product');
            $table->string('name_client');
            $table->string('email_client');
            $table->string('phone_client');
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

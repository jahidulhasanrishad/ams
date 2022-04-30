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
        Schema::create('client_lists', function (Blueprint $table) {
            $table->id();
            $table->string('clientName')->nullable($value = true);
            $table->string('clientMobile')->nullable($value = true);
            $table->string('clientEmail')->nullable($value = true);
            $table->string('clientAddress')->nullable($value = true);
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
        Schema::dropIfExists('client_lists');
    }
};

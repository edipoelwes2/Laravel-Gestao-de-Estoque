<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diapers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('products_id');

            $table->Integer('qtds');
            $table->Decimal('valor_entrada', 10, 2);
            $table->timestamps();

            $table->foreign('products_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diapers');
    }
}

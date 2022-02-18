<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables10', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('reserv_code', 17);
            $table->integer('type_id');
            $table->string('type_name', 10);
            $table->integer('type_money');
            $table->integer('buy_num');
            $table->integer('cancel_money');
            $table->timestamps();

            $table->unique(['reserv_code', 'type_id']);
            $table->foreign(['reserv_code'])
                  ->references(['reserv_code'])->on('tables8');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables10');
    }
}

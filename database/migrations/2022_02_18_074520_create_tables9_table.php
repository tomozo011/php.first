<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables9Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables9', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('reserv_code');
            $table->integer('scv_id');
            $table->string('scv_name', 30);
            $table->integer('scv_type');
            $table->integer('scv_select_type');
            $table->integer('select_btn_id');
            $table->integer('usagea_time');
            $table->integer('scv_status');
            $table->datetime('scv_start');
            $table->datetime('scv_end');
            $table->timestamps();

            $table->unique(['reserv_code', 'scv_id']);
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
        Schema::dropIfExists('tables9');
    }
}

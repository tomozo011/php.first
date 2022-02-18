<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables1', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('biz_id');
            $table->char('ticket_code', 5);
            $table->integer('spot_area_id');
            $table->char('genre_code1', 10);
            $table->char('genre_code2', 20);
            $table->String('ticket_name', 30);
            $table->text('ticket_remarks', 200)->nullable();
            $table->integer('tickets_kind');
            $table->integer('minors_flag');
            $table->integer('cansel_flag');
            $table->integer('cansel_limit');
            $table->timestamps();
            
            $table->unique(['biz_id', 'ticket_code']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables1');
    }
}

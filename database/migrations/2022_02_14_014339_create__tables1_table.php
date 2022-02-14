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
            // $table->integer('biz_id')->unique();
            // $table->char('ticket_code',5)->unique();
            // $table->integer('spot_area_id')->foreign();
            $table->char('genre_code1', 10);
            $table->char('genre_code2', 20);
            $table->String('ticket_name', 30);
            // $table->text('ticket_remarks', 200)->nullable();
            $table->integer('tickets_kind');
            $table->integer('minors_flag');
            $table->integer('cansel_flag');
            $table->integer('cansel_limit');
            // $table->datetime('created_at')->nullable();
            // $table->datetime('updated_at')->nullable();
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
        Schema::dropIfExists('tables1');
    }
}

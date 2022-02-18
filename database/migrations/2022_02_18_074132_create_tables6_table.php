<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables6Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables6', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('biz_id');
            $table->char('ticket_code');
            $table->integer('scv_id');
            $table->string('scv_name', 30);
            $table->text('scv_cautions', 300);
            $table->integer('scv_type');
            $table->integer('scv_select_type');
            $table->integer('usage_time');
            $table->timestamps();

            $table->unique(['biz_id', 'ticket_code', 'scv_id']);
            $table->foreign(['biz_id', 'ticket_code'])
                  ->references(['biz_id', 'ticket_code'])->on('tables1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables6');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables4Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables4', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('biz_id');
            $table->char('ticket_code');
            $table->integer('cautions_type');
            $table->integer('cautions_index');
            $table->text('cautions_text', 191)->nullable();
            $table->timestamps();

            $table->unique(['biz_id', 'ticket_code', 'cautions_type', 'cautions_index']);
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
        Schema::dropIfExists('tables4');
    }
}

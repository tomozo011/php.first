<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables3', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('biz_id');
            $table->char('ticket_code');
            $table->integer('contents_type');
            $table->integer('contents_index');
            $table->string('contents_data',1000)->nullable();
            $table->timestamps();

            $table->unique(['biz_id', 'ticket_code', 'contents_type', 'contents_index']);
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
        Schema::dropIfExists('tables3');
    }
}

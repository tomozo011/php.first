<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables5Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables5', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('biz_id');
            $table->char('ticket_code');
            $table->integer('type_id');
            $table->string('type_name', 10);
            $table->integer('type_money');
            $table->integer('cancel_type');
            $table->integer('cancel_rate');
            $table->timestamps();

            $table->unique(['biz_id', 'ticket_code', 'type_id']);
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
        Schema::dropIfExists('tables5');
    }
}

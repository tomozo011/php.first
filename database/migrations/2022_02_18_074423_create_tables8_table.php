<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables8Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables8', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('reserv_code', 17);
            $table->integer('biz_id');
            $table->char('ticket_code', 5);
            $table->integer('sales_id');
            $table->integer('user_id');
            $table->string('ticket_name', 30);
            $table->integer('tickets_kind');
            $table->datetime('ticket_buyday');
            $table->datetime('ticket_interval_start');
            $table->datetime('ticket_interval_end');
            $table->datetime('ticket_start');
            $table->datetime('ticket_end');
            $table->integer('ticket_total_num');
            $table->datetime('cacel_limit_start');
            $table->datetime('cacel_end');
            $table->integer('ticket_status');
            $table->timestamps();

            $table->unique(['reserv_code']);
            $table->foreign(['biz_id','ticket_code', 'sales_id'])
                  ->references(['biz_id', 'ticket_code', 'sales_id'])->on('tables2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables8');
    }
}

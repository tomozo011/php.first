<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables7Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables7', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('biz_id');
            $table->char('ticket_code');
            $table->integer('sales_id');
            $table->datetime('ticket_interval_start');
            $table->datetime('ticket_interval_end');
            $table->integer('ticket_days');
            $table->integer('ticket_num');
            $table->integer('ticket_min_num');
            $table->integer('ticket_max_num');
            $table->timestamps();
            
            $table->unique(['biz_id', 'ticket_code', 'sales_id','ticket_interval_start']);
            $table->foreign(['biz_id', 'ticket_code', 'sales_id'])
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
        Schema::dropIfExists('tables7');
    }
}

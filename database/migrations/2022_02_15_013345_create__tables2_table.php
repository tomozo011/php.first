<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables2', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('biz_id');
            $table->char('ticket_code', 5);
            $table->integer('sales_id');
            $table->unique('biz_id', 'ticket_code','sales_id');
            $table->datetime('sales_interval_start');
            $table->datetime('sales_interval_end');
            $table->timestamps();

            $table->foreign('biz_id')
                  ->references('id')->on('table1')
                  ->onDelete('cascade');
            $table->foreign('ticket_code')
                  ->references('id')->on('table1')
                  ->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables2');
    }
}

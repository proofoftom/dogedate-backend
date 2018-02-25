<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogeGenePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doge_gene', function (Blueprint $table) {
            $table->integer('doge_id')->unsigned()->index();
            $table->foreign('doge_id')->references('id')->on('doges')->onDelete('cascade');
            $table->integer('gene_id')->unsigned()->index();
            $table->foreign('gene_id')->references('id')->on('genes')->onDelete('cascade');
            // $table->primary(['doge_id', 'gene_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('doge_gene');
    }
}

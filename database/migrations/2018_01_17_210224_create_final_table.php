<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final', function (Blueprint $table) {
            $table->increments('id');
            //$table->img('thumbnail');
            $table->string('title')->default('title');
            $table->text('content');
            $table->text('value');
            $table->text('features1');
            $table->text('features2');            
            $table->text('features3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('final');
    }
}

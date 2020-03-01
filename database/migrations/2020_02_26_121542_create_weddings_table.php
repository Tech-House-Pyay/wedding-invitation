<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeddingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weddings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('wdate');
            $table->string('bname');
            $table->string('gname');
            $table->string('bgabout');
            $table->string('bimage')->nullable();
            $table->string('gimage')->nullable();
            $table->string('bBio');
            $table->string('gBio');
            $table->string('mimage')->nullable();
            $table->date('mdate');
            $table->string('meetText');
            $table->string('timage')->nullable();
            $table->date('tdate');
            $table->string('tripText');
            $table->string('engimage')->nullable();
            $table->date('engdate');
            $table->string('engtripText');
            $table->string('bfimage')->nullable();
            $table->string('bfText');
            $table->string('bmimage')->nullable();
            $table->string('bmText');
            $table->string('bbimage')->nullable();
            $table->string('bbText');
            $table->string('bsimage')->nullable();
            $table->string('bsText');
            $table->string('gfimage')->nullable();
            $table->string('gfText');
            $table->string('gmimage')->nullable();
            $table->string('gmText');
            $table->string('gbimage')->nullable();
            $table->string('gbText');
            $table->string('gsimage')->nullable();
            $table->string('gsText');
            $table->json('gallery')->nullable();
            $table->time('wtime');
            $table->string('wplace');
            $table->time('wpartytime');
            $table->string('wpartyplace');
            $table->time('dtime');
            $table->string('dplace');
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
        Schema::dropIfExists('weddings');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applics', function (Blueprint $table) {
            $table->id();
            $table->string('slno');
            $table->string('date');
            $table->longText('praptesu');
            $table->longText('bisaya');
            $table->string('whome');
            $table->longText('sarangsa');
            $table->longText('binita');
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
        Schema::dropIfExists('applics');
    }
}

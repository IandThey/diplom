<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('go_katalogs',function (Blueprint $table){
            $table->id();
            $table->string('name_razdel');
            $table->string('a_razdel');
            $table->string('img_razdel');
            $table->string('text_razdel');
        });

        Schema::create('so_katalogs',function (Blueprint $table){
            $table->id();
            $table->string('name_razdel');
            $table->string('a_razdel');
            $table->string('img_razdel');
            $table->string('text_razdel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('go_katalogs');
        Schema::dropIfExists('so_katalogs');
    }
};

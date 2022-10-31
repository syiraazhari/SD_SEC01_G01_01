<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('Title_en');
            $table->longtext('Title_ar');
            $table->longtext('Title_gr');
            $table->longtext('slug');
            $table->longtext('Content_en');
            $table->longtext('Content_ar');
            $table->longtext('Content_gr');
            $table->string('image');
            $table->string('Days');
            $table->string('Hours');
            $table->string('Minutes');
            $table->string('Address');
            $table->string('FinishTime');
            $table->string('StartTime');
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
        Schema::dropIfExists('events');
    }
}

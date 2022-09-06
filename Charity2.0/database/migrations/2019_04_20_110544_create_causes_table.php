<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('causes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('Title_en');
            $table->longtext('Title_ar');
            $table->longtext('Title_gr');
            $table->longtext('slug');
            $table->longtext('Content_en');
            $table->longtext('Content_ar');
            $table->longtext('Content_gr');
            $table->longtext('category_id');
            $table->longtext('Raised');
            $table->longtext('Goal');
            $table->string('Donors');
            $table->string('image');
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
        Schema::dropIfExists('causes');
    }
}

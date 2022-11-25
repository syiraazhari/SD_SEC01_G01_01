<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('author_id')->default(1);
            $table->integer('category_id')->default(0);
            $table->longtext('Title_en');
            $table->longtext('Title_ar');
            $table->longtext('Title_gr');
            $table->longtext('body_en');
            $table->longtext('body_ar');
            $table->longtext('body_gr');
            $table->longtext('slug');
            $table->longtext('seo_title');
            $table->longtext('excerpt');
            $table->string('image');
            $table->longtext('meta_description');
            $table->longtext('meta_keywords');
            $table->longtext('featured');
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
        Schema::dropIfExists('posts');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogDatabase extends Migration
{
	public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('subtitle');
            $table->text('content_raw');
            $table->text('content_html');
            $table->string('page_image');
            $table->string('meta_description');
            $table->boolean('is_draft');
            $table->string('layout')->default('blog.layouts.post');
            $table->timestamps();
            $table->timestamp('published_at')->index();
        });
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag')->unique();
            $table->string('title');
            $table->string('subtitle');
            $table->string('page_image');
            $table->string('meta_description');
            $table->string('layout')->default('blog.layouts.index');
            $table->boolean('reverse_direction');
            $table->timestamps();
        });
        Schema::create('post_tag_pivot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned()->index();
            $table->integer('tag_id')->unsigned()->index();
        });
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('queue');
            $table->longText('payload');
            $table->tinyInteger('attempts')->unsigned();
            $table->tinyInteger('reserved')->unsigned();
            $table->unsignedInteger('reserved_at')->nullable();
            $table->unsignedInteger('available_at');
            $table->unsignedInteger('created_at');
        });

	}
	public function down(){
        Schema::drop('jobs');
        Schema::drop('post_tag_pivot');
        Schema::drop('tags');
        Schema::drop('posts');
	}
}

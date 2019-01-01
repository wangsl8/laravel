<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('标题');
            $table->string('cover_url')->comment('封面');
            $table->decimal('price')->comment('定价');
            $table->string('author')->comment('作者');
            $table->string('press')->comment('出版社');
            $table->date('published_date')->comment('出版时间');
            $table->string('ISBN')->comment('ISBN');
            $table->text('summary')->comment('简介');
            $table->unsignedInteger('type_id')->comment('类别');
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
        Schema::dropIfExists('books');
    }
}

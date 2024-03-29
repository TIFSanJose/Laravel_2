<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaggablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taggables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('tag_id')
                ->nullable();

            $table->foreign('tag_id')
                ->references('id')->on('tags')
                ->onDelete('set null')
                ->onUpdate('cascade')
                ;

            $table->unsignedBigInteger('taggable_id');
            $table->string('taggable_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taggables');
    }
}

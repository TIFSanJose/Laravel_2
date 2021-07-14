<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('calle');
            $table->integer('puerta_numero');
            $table->string('edificio', '50')->nullable();
            $table->integer('piso_numero')->nullable();
            $table->integer('apartamento_numero')->nullable();

            $table->unsignedBigInteger('user_id')
                ->unique()
                ->nullable()    
            ;

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade')
                ;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('domicilios');
    }
}

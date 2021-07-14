<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('users', function(Blueprint $table) {
            $table->unsignedBigInteger('domicilio_id')
                ->unique()
                ->nullable()
                ;

            $table->foreign('domicilio_id')
                ->references('id')
                ->on('domicilios')
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
        
        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn('domicilio_id');
        });
        
    }

}

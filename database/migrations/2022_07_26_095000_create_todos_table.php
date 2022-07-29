<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->mediumText('description')->nullable();
            $table->boolean('completed')->default(false);
            //$table->unsignedInteger('user_id');
            //$table->foreign('teams_id')->references('id')->on('teams')->onDelete('cascade');//kur nje row fshihet ai fshin te gjitha referencat dhe datat  attached
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
        Schema::dropIfExists('todos');
    }
}
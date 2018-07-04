<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_proposals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid');
            $table->string('email')->nullable();
            $table->text('links')->nullable();
            $table->text('description')->nullable();
            $table->text('description_short')->nullable();
            $table->integer('nano_goal')->nullable();
            $table->string('nano_address')->nullable();
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
        Schema::dropIfExists('project_proposals');
    }
}

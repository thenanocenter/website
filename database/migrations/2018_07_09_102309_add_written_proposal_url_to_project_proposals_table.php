<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWrittenProposalUrlToProjectProposalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_proposals', function (Blueprint $table) {
            $table->string('written_proposal_url')->nullable();
            $table->string('goal')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_proposals', function (Blueprint $table) {
            $table->dropColumn(['written_proposal_url','goal']);
        });
    }
}

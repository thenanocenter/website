<?php

use Illuminate\Database\Seeder;

class ProjectProposalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minModels = 10;
        $existingModels = \App\ProjectProposal::all();
        if(count($existingModels) < $minModels){
            for($i=0;$i<$minModels;$i++){
                $projectProposal = factory(\App\ProjectProposal::class)->create();
            }
        }
    }
}

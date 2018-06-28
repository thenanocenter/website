<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minModels = 10;
        $existingModels = \App\Project::all();
        if(count($existingModels) < $minModels){
            for($i=0;$i<$minModels;$i++){
                $project = factory(\App\Project::class)->create();
                $payments = factory(\App\Payment::class,25)->create([
                    'paymentable_id' => $project->id,
                    'paymentable_type' => get_class($project),
                ]);
            }
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $minModels = 10;
        $existingModels = \App\User::all();
        $allRoles = \App\Options\Role::get();
        if(count($existingModels) < $minModels){
            for($i=0;$i<$minModels;$i++){
                $role = $allRoles[array_rand($allRoles)];
                $user = factory(\App\User::class)->create();
                $user->assignRole($role);
            }
        }
    }
}

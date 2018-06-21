<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Spatie\Permission\Models\Role;

class InitiateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'init:roles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initiate roles on a new Server';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->createRoles();
    }

    private function createRoles(){
        $roles = \App\Options\Role::get();
        foreach($roles as $role){
            $this->createRoleIfNotExists($role);
        }
    }

    private function createRoleIfNotExists($name){
        if(Role::where('name',$name)->first()){
            return null;
        }
        $role = Role::create(['name' => $name]);
        $this->info('Role: "'.$name.'" created');
        return $role;
    }
}

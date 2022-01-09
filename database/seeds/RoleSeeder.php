<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [['name' => 'trainee'], ['name' =>'agent'], ['name' =>'rop'], ['name' =>'admin'], ['name' =>'lawyer']];
        foreach($roles as $role){
            DB::table('roles')->insert([
            $role
            ]);
        }
        
    }
}

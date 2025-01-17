<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RolesTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("roles")->insertOrIgnore([
            ['id'=>1, 'role'=>'Student', 'description'=>'Default role for new users', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>2, 'role'=>'Admin', 'description'=>'Administrative role with full permissions', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>3, 'role'=>'Instructor', 'description'=>'Instructor for students', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>4, 'role'=>'Parent', 'description'=>'From student info', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>5, 'role'=>'Finance', 'description'=> 'Manages finance', 'created_at'=>now(), 'updated_at'=>now()],
        ]);
    }
}

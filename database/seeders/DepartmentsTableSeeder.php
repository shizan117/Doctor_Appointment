<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['name' => 'Cardiology'],
            ['name' => 'Orthopedics'],
            ['name' => 'Neurology'],

        ];


        DB::table('departments')->insert($departments);
    }
}

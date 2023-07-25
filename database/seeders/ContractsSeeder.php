<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Carbon\Carbon;
use DB;

class ContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('contracts')->insert([
            'descriere' => Str::random(10),
            'data_intoc' => Carbon::parse('2000-01-01'),
            'cnp_cui' => Str::random(10),
            'nume' => Str::random(10),
            'prenume' => Str::random(10),
            'durata_luni' => rand(1,100),
            'suma' => rand(1,100),
            'created_at' => Carbon::parse('2001-01-01 01:01:01'),
            'updated_at' => Carbon::parse('2001-01-01 01:01:01')
        ]);
    }
}

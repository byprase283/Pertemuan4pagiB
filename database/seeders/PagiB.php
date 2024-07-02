<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PagiB extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pagi_b_s')->insert([
            'nim' => '131351019',
            'nama' => 'Burhan',
            'jurusan' => 'Teknik Industri',
        ]);
    }
}

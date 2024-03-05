<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'input_date' => '2024-02-13',
            'nama_project' => 'Pembuatan podium',
            'requestor' => 'wahyudi',
            'category_project' => 'Infrastructure',
            'description_project' => '2/13 QC request podium 5pcs',
            'status' => 'berjalan',
            'pic_project' => 'anas',
            'eta_project' => '2024-03-10',
        ]);
    }
}

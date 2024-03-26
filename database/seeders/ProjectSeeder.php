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
            'detail'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam velit eu libero viverra, et posuere sapien pulvinar.',
            'requestor' => 'wahyudi',
            'category_project' => 'Infrastructure',
            'description_project' => '2/13 QC request podium 5pcs',
            'status' => 'berjalan',
            'pic_project' => 'anas',
            'eta_project' => '2024-03-10',
        ]);
        DB::table('projects')->insert([
            'input_date' => '2023-12-19',
            'nama_project' => 'Busbar Handjack - Warehouse',
            'detail'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam velit eu libero viverra, et posuere sapien pulvinar.',
            'requestor' => 'iii',
            'category_project' => 'Infrastructure',
            'description_project' => '01/03 PO send to Vendor
            01/02 Waiting pak Dwiki release PO
            12/29 PO 4512624685 created
            12/19 PDPO Ready, On process PP',
            'status' => 'Open',
            'pic_project' => 'Joni',
            'eta_project' => '2024-02-29',
        ]);
        DB::table('projects')->insert([
            'input_date' => '2023-12-01',
            'nama_project' => 'Utilize Bin with Separator / partition - box',
            'detail'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam velit eu libero viverra, et posuere sapien pulvinar.',
            'requestor' => 'oooo',
            'category_project' => 'Infrastructure',
            'description_project' => '01/02 waiting to be paint
                                    12/19 drawing created, on process to WH
                                    12/1 need send drawing to FS',
            'status' => 'On Progress',
            'pic_project' => 'Joni',
            'eta_project' => '2024-03-14',
        ]);
        DB::table('projects')->insert([
            'input_date' => '2023-12-01',
            'nama_project' => 'HV Door Jig with Hinge - Welded',
            'detail'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam velit eu libero viverra, et posuere sapien pulvinar.',
            'requestor' => 'ssss',
            'category_project' => 'Infrastructure',
            'description_project' => '12/1 need discuss with Pak Ire (Area Owner)',
            'status' => 'Open',
            'pic_project' => 'Joni',
            'eta_project' => '2024-01-31',
        ]);
        DB::table('projects')->insert([
            'input_date' => '2023-11-14',
            'nama_project' => 'Buy complete package of TruBend 5130',
            'detail'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam velit eu libero viverra, et posuere sapien pulvinar.',
            'requestor' => 'dddd',
            'category_project' => 'Maintenance',
            'description_project' => '12/14 Send to vendor
            12/14 PO created',
            'status' => 'Done',
            'pic_project' => 'Joni',
            'eta_project' => '2024-01-31',
        ]);
        DB::table('projects')->insert([
            'input_date' => '2023-05-19',
            'nama_project' => 'Pengecekan Kalibrasi',
            'detail'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam velit eu libero viverra, et posuere sapien pulvinar.',
            'requestor' => 'ffff',
            'category_project' => '	Tool Store',
            'description_project' => 'Twindi cek kalibrasi alat yang masa kalibrasinya sebulan lagi habis',
            'status' => 'Done',
            'pic_project' => 'Joni',
            'eta_project' => '2023-12-29',
        ]);
    }
}

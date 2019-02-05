<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

        	'nama_kelas' => 'XII_RPL1',
        	'jurusan' => 'Rekayasa Perangkat Lunak'

        ];

        DB::table('table_kelas')->insert($data);

         $data = [

        	'nama_kelas' => 'XII_RPL2',
        	'jurusan' => 'Rekayasa Perangkat Lunak'

        ];

        DB::table('table_kelas')->insert($data);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nip' => '0000001',
                'nama' => 'Lisa',
                'alamat' => 'Malang',
                'jabatan' => 'Manager',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '0000002',
                'nama' => 'Momo',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5200000'
            ],
            [
                'nip' => '0000003',
                'nama' => 'Rei',
                'alamat' => 'Blitar',
                'jabatan' => 'Sales Supervisor',
                'gaji_pokok' => '5000000'
            ],
            [
                'nip' => '0000004',
                'nama' => 'Yofa',
                'alamat' => 'Blitar',
                'jabatan' => 'Direktur',
                'gaji_pokok' => '7000000'
            ],
            [
                'nip' => '0000005',
                'nama' => 'Liso',
                'alamat' => 'Malang',
                'jabatan' => 'sales',
                'gaji_pokok' => '5000000'
            ],
            [
                'nip' => '0000006',
                'nama' => 'Garit',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5000000'
            ],
            [
                'nip' => '0000007',
                'nama' => 'Al',
                'alamat' => 'Malang',
                'jabatan' => 'Manager',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '0000008',
                'nama' => 'Geri',
                'alamat' => 'Malang',
                'jabatan' => 'sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '0000009',
                'nama' => 'yao',
                'alamat' => 'Malang',
                'jabatan' => 'sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '00000010',
                'nama' => 'Mina',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '00000011',
                'nama' => 'Putra',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '00000012',
                'nama' => 'Putri',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '00000013',
                'nama' => 'Tika',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '00000014',
                'nama' => 'Nia',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '00000015',
                'nama' => 'Fiko',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '00000016',
                'nama' => 'Fika',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '00000017',
                'nama' => 'Siri',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '00000018',
                'nama' => 'Robi',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '00000019',
                'nama' => 'Rina',
                'alamat' => 'Malang',
                'jabatan' => 'Sales',
                'gaji_pokok' => '5500000'
            ],
            [
                'nip' => '00000020',
                'nama' => 'Yoga',
                'alamat' => 'Malang',
                'jabatan' => 'Manager',
                'gaji_pokok' => '5500000'
            ],
        ];
        DB::table('pegawai')->insert($data);
    }
}

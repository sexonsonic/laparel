<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            ['nama'=>'Farrel','nis'=>'12345','jenis_kelamin'=>'Laki-laki','alamat'=>'Sukamenak','tgl_lahir'=>'2002-10-22','umur'=>'17'],
            ['nama'=>'Jaypro','nis'=>'54321','jenis_kelamin'=>'Laki-laki','alamat'=>'Bojong','tgl_lahir'=>'2003-05-15','umur'=>'16'],
            ['nama'=>'Eliza','nis'=>'09876','jenis_kelamin'=>'Perempuan','alamat'=>'TKI','tgl_lahir'=>'2002-09-21','umur'=>'17'],
            ['nama'=>'Hilmi','nis'=>'67890','jenis_kelamin'=>'Laki-laki','alamat'=>'Dayeuhkolot','tgl_lahir'=>'2001-01-01','umur'=>'17'],
            ['nama'=>'Adelia','nis'=>'45678','jenis_kelamin'=>'Perempuan','alamat'=>'Buah Batu','tgl_lahir'=>'2003-08-04','umur'=>'16']
        ];
        //
        DB::table('siswa')->insert($siswa);
    }
}

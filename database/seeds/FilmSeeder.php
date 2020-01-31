<?php

use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['judul'=>'Up','sutradara'=>'Pete Docter','tgl_rilis'=>'2009-07-29','genre'=>'drama/fantasi','durasi'=>'96 menit',
            'bahassa'=>'Inggris','negara'=>'AS'],
            ['judul'=>'AntMan','sutradara'=>'Peyton Reed','tgl_rilis'=>'2015-07-07','genre'=>'Action','durasi'=>'117 menit',
            'bahassa'=>'Inggris','negara'=>'AS'],
            ['judul'=>'Perempuan Tanah Jahanam','sutradara'=>'Joko Anwar','tgl_rilis'=>'2019-10-17','genre'=>'Horror','durasi'=>'106 menit',
            'bahassa'=>'Indonesia','negara'=>'Indonesia'],
            ['judul'=>'Hit n Run','sutradara'=>'Ody C Harahap','tgl_rilis'=>'2019-06-04','genre'=>'Action','durasi'=>'114 menit',
            'bahassa'=>'Indonesia','negara'=>'Indonesia'],
            ['judul'=>'Frozen 2','sutradara'=>'Chris Buck','tgl_rilis'=>'2019-11-20','genre'=>'Fantasi/musikal','durasi'=>'103 menit',
            'bahassa'=>'inggris','negara'=>'AS'],
            ['judul'=>'Ralph Breaks the Internet','sutradara'=>'Rich Moore','tgl_rilis'=>'2018-11-21','genre'=>'fantasi','durasi'=>'118 menit',
            'bahassa'=>'inggris','negara'=>'AS'],
            ['judul'=>'NKCTHI','sutradara'=>'Angga Dwimas','tgl_rilis'=>'2020-01-02','genre'=>'drama','durasi'=>'112 menit',
            'bahassa'=>'indonesia','negara'=>'Indonesia'],
            ['judul'=>'Rasuk 2','sutradara'=>'Rizal Mantovani','tgl_rilis'=>'2020-01-02','genre'=>'horror','durasi'=>'95 menit',
            'bahassa'=>'indonesia','negara'=>'Indonesia'],
            ['judul'=>'Terlalu Tampan','sutradara'=>'Sabrina R','tgl_rilis'=>'2019-01-31','genre'=>'drama','durasi'=>'98 menit',
            'bahassa'=>'indonesia','negara'=>'Indonesia'],
            ['judul'=>'The Meg','sutradara'=>'Jon T','tgl_rilis'=>'2018-08-10','genre'=>'aksi fantasi ilmiah','durasi'=>'113 menit',
            'bahassa'=>'inggris','negara'=>'China United States']
        ];
        DB::table('film')->insert($post);
    }
}

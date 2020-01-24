<?php

use Illuminate\Database\Seeder;

class MusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['kode_lagu'=>'F001','judul_lagu'=>'Dalam Hitungan','penyanyi'=>'.Feast','penulis'=>'Baskara Putra',
            'album'=>'Dalam Hitungan','genre'=>'rock','tgl_rilis'=>'2019-08-10'],
            ['kode_lagu'=>'BN01','judul_lagu'=>'Sampai Jadi Debu','penyanyi'=>'Banda Neira','penulis'=>'banda Neira',
            'album'=>'Yang Patah Tumbuh, Yang Hilang Berganti','genre'=>'indie','tgl_rilis'=>'2016-01-30'],
            ['kode_lagu'=>'F002','judul_lagu'=>'Gelora','penyanyi'=>'.Feast ft. Panturas','penulis'=>'Chuang Yew Audi Mok',
            'album'=>'Gelora','genre'=>'rock','tgl_rilis'=>'2019-11-27'],
            ['kode_lagu'=>'D001','judul_lagu'=>'Growing Up','penyanyi'=>'Daramuda (Rara Sekar)','penulis'=>'Rara Sekar',
            'album'=>'Salam Kenal','genre'=>'pop','tgl_rilis'=>'2018-07-28'],
            ['kode_lagu'=>'BN02','judul_lagu'=>'Biru','penyanyi'=>'Banda Neira','penulis'=>'Banda Neira',
            'album'=>'Yang Patah Tumbuh, Yang Hilang Berganti','genre'=>'indie','tgl_rilis'=>'2019-01-29'],
            ['kode_lagu'=>'M502','judul_lagu'=>'Memories','penyanyi'=>'Maroon 5','penulis'=>'Adam Levine',
            'album'=>'Memories','genre'=>'pop','tgl_rilis'=>'2019-09-20'],
            ['kode_lagu'=>'Q001','judul_lagu'=>'Bohemian Rhapsody','penyanyi'=>'Queen','penulis'=>'Freddy Mercury',
            'album'=>'A Night at the Opera','genre'=>'Symphonic Rock','tgl_rilis'=>'1975-10-31'],
            ['kode_lagu'=>'Q002','judul_lagu'=>'Somebody to Love','penyanyi'=>'Queen','penulis'=>'Freddy Mercury',
            'album'=>'A Day at the Races','genre'=>'rock','tgl_rilis'=>'1976-11-12'],
            ['kode_lagu'=>'Q003','judul_lagu'=>'Dont Stop Me Now','penyanyi'=>'Queen','penulis'=>'Freddy Mercury',
            'album'=>'Jazz','genre'=>'pop rock','tgl_rilis'=>'1979-01-05'],
            ['kode_lagu'=>'Q004','judul_lagu'=>'We Are the Champions','penyanyi'=>'Queen','penulis'=>'Freddy Mercury',
            'album'=>'News of the World','genre'=>'arena rock','tgl_rilis'=>'1977-10-07']
        ];
        DB::table('music')->insert($post);
    }
}

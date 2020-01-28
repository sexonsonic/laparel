<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function tambah($a=null,$b=null){
        $ab = "Silahkan isi angka yang ingin dihitung";

        if (isset($a) || isset ($b)) {
            $ab = "Silahkan masukkan 1 angka lagi";
        } if (isset($a) && isset ($b)){
            $c = $a + $b;
            $ab = "$a + $b = $c";
        }
        return $ab;
    }

    public function kurang($a=null,$b=null){
        $ab = "Silahkan isi angka yang ingin dihitung";

        if (isset($a) || isset ($b)) {
            $ab = "Silahkan masukkan 1 angka lagi";
        } if (isset($a) && isset ($b)){
            $c = $a - $b;
            $ab = "$a - $b = $c";
        }
        return $ab;
    }

    public function bagi($a=null, $b=null){
        $ab = "Silahkan isi angka yang ingin dihitung";

        if (isset($a) || isset ($b)) {
            $ab = "Silahkan masukkan 1 angka lagi";
        } if (isset($a) && isset ($b)){
            $c = $a / $b;
            $ab = "$a / $b = $c";
        }
        return $ab;
    }

    public function kali($a=null, $b=null){
        $ab = "Silahkan isi angka yang ingin dihitung";

        if (isset($a) || isset ($b)) {
            $ab = "Silahkan masukkan 1 angka lagi";
        } if (isset($a) && isset ($b)){
            $c = $a * $b;
            $ab = "$a * $b = $c";
        }
        return $ab;
    }

    public function loop(){
        $data = [
            ['Nama'=>'Hari','Kelas'=>'XI RPL 1','uangjajan'=>10000],
            ['Nama'=>'Memet','Kelas'=>'XI RPL 1','uangjajan'=>35000],
            ['Nama'=>'Restu','Kelas'=>'XI RPL 1','uangjajan'=>20000],
            ['Nama'=>'David','Kelas'=>'XI RPL 1','uangjajan'=>100000],
            ['Nama'=>'Farrel','Kelas'=>'XI RPL 1','uangjajan'=>25000],
        ];

        $tabungan;
        foreach ($data as $val => $key) {

            if ($key['uangjajan'] > 50000) {
                $tabungan = $key['uangjajan']*25/100;
                $sisa = $key['uangjajan'] - $tabungan;
            } elseif ($key['uangjajan'] > 25000){
                $tabungan = $key['uangjajan']*15/100;
                $sisa = $key['uangjajan'] - $tabungan;
            } elseif ($key['uangjajan'] > 10000) {
                $tabungan = $key['uangjajan']*10/100;
                $sisa = $key['uangjajan'] - $tabungan;
            } else {
                $tabungan=0;
                $sisa = $key['uangjajan'];
            }

            $sisa = $key['uangjajan'] - $tabungan;

            echo "Nama : ". $key['Nama']. "<br>".
            "Kelas : ".$key['Kelas']."<br>".
            "Uang Jajan : ".$key['uangjajan']."<br>".
            "Tabungan : ".$tabungan."<br>".
            "Sisa Uang Jajan : ".$sisa.
            "<hr>";
        }
    }

    public function gaji(){
        $datacuy = [
            ['Nama'=>'Farid','Agama'=>'Islam','Alamat'=>'Lanud Sulaiman','jk'=>'L','Jabatan'=>'Staff','jam_kerja'=>240],
            ['Nama'=>'Adi','Agama'=>'Hindu','Alamat'=>'Sadang','jk'=>'L','Jabatan'=>'Manager','jam_kerja'=>276],
            ['Nama'=>'Veera','Agama'=>'Kristen','Alamat'=>'Cibaduyut','jk'=>'P','Jabatan'=>'Sekretaris','jam_kerja'=>230]
        ];

        foreach ($datacuy as $key => $value) {
            if ($value['Jabatan'] == "Manager") {
                $gaji = "5000000";
                if ($key['jam_kerja'] > 250) {
                    $gaji2 = $gaji*10/100;
                    $bonus = $gaji+$gaji2;
                } if ($key['jam_kerja'] > 200) {
                    $gaji2 = $gaji*5/100;
                    $bonus = $gaji+$gaji2;
                }


            } if ($value['Jabatan'] == "Sekretaris") {
                $gaji = "3500000";
                if ($key['jam_kerja'] > 250) {
                    $gaji2 = $gaji*10/100;
                    $bonus = $gaji+$gaji2;
                } if ($key['jam_kerja'] > 200) {
                    $gaji2 = $gaji*5/100;
                    $bonus = $gaji+$gaji2;
                }


            } if ($value['Jabatan'] == "Staff") {
                $gaji = "2500000";
                if ($key['jam_kerja'] > 250) {
                    $gaji2 = $gaji*10/100;
                    $bonus = $gaji+$gaji2;
                } if ($key['jam_kerja'] > 200) {
                    $gaji2 = $gaji*5/100;
                    $bonus = $gaji+$gaji2;
                }


            } else {
                echo "";
            }

            $PPN = $bonus*2.5/100;
            $total = $bonus - $PPN;

            echo "Nama : ".$key['Nama']."<br>".
                 "Agama : ".$key['Agama']."<br>".
                 "Alamat : ".$key['Alamat']."<br>".
                 "Jenis Kelamin : ".$key['jk']."<br>".
                 "Jabatan : ".$key['Jabatan']."<br>".
                 "Jam Kerja : ".$key['jam_kerja']."<br>".
                 "Gaji Asli : ".$gaji."<br>".
                 "Bonus : ".$gaji2."<br>".
                 "PPN : ".$PPN."<br>".
                 "Total Gaji : ".$total."<hr>";
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Costumer;

class CostumerController extends Controller
{
    public function index(){
        $costumer = Costumer::all();
        return $costumer;
    }

    public function show($id){
        $costumer = Costumer::findOrFail($id);
        return $costumer;
    }

    public function store($code_costumer, $name, $email, $country, $city, $address, $contact_number){
        $costumer = new Costumer();
        $costumer->code_costumer = $code_costumer;
        $costumer->name = $name;
        $costumer->email = $email;
        $costumer->country = $country;
        $costumer->city = $city;
        $costumer->address = $address;
        $costumer->contact_number = $contact_number;
        $costumer->save();
        return $costumer;
    }

    public function update($id, $code_costumer, $name, $email, $country, $city, $address, $contact_number){
        $costumer = Costumer::find($id);
        $costumer->code_costumer = $code_costumer;
        $costumer->name = $name;
        $costumer->email = $email;
        $costumer->country = $country;
        $costumer->city = $city;
        $costumer->address = $address;
        $costumer->contact_number = $contact_number;
        $costumer->save();
        return $costumer;
    }

    public function delete($id){
        $costumer = Costumer::find($id);
        $costumer->delete();
        return $costumer."<br> Berhasil dihapus";
    }
}

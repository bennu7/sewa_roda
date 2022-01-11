<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public  function index()
    {
        $motor = Produk::where('category_id', 1)->get();
        $mobil = Produk::where('category_id', 2)->get();
        $firstMotor = Produk::first();

        return view("home", [
            "title" => "home",
            "motors" => $motor,
            "mobils" => $mobil,
            "first" => $firstMotor,
        ]);
    }
}

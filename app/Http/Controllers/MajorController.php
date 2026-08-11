<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
       public function index()
    {
        return "Ini adalah halaman daftar jurusan";
    }

    public function create()
    {
        return "Ini adalah halaman tambah jurusan";
    }

    public function store()
    {
        return "Melakukan penambahan data jurusan";
    }


    public function show(string $id)
    {
        return "Melakukan detail jurusan";
    }

    public function edit(string $id)
    {
        return "Halaman untuk mengedit data jurusan";
    }

    public function update(string $id)
    {
        return "Melakukan pembaharuan terhadap data jurusan";
    }

    public function destroy(string $id)
    {
        return "Menghapus data jurusan";
    }
}

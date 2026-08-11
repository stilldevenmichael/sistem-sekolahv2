<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar guru";
    }

    public function create()
    {
          return "Ini adalah halaman tambah guru";
    }

    public function store()
    {
          return "Melakukan penambahan data guru";
    }


    public function show(string $id)
    {
         return "Melakukan detail guru";
    }

    public function edit(string $id)
    {
         return "Halaman untuk mengedit data guru";
    }

    public function update(string $id)
    {
         return "Melakukan pembaharuan terhadap data guru";
    }

    public function destroy(string $id)
    {
         return "Menghapus data guru";
    }


}


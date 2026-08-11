<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar siswa";
    }

    public function create()
    {
        return "Ini adalah halaman tambah siswa";
    }

    public function store()
    {
        return "Melakukan penambahan data siswa";
    }


    public function show(string $id)
    {
        return "Melakukan detail siswa";
    }

    public function edit(string $id)
    {
        return "Halaman untuk mengedit data siswa";
    }

    public function update(string $id)
    {
        return "Melakukan pembaharuan terhadap data siswa";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa";
    }
}

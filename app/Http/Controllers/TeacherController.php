<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
     private $teachers = [
          [
               'id' => 1,
               'nip' => '198501012024',
               'name' => 'Budi Santoso',
               'gender' => 'Laki-Laki',
               'subject' => 'Akuntansi Dasar',
               'phone' => '081234560001',
               'status' => 'Aktif',
          ],
          [
               'id' => 2,
               'nip' => '198703152024',
               'name' => 'Siti Aminah',
               'gender' => 'Perempuan',
               'subject' => 'Jaringan Komputer',
               'phone' => '081234560002',
               'status' => 'Aktif',
          ]
     ];

     public function index()
     {
          $title = "Sistem Sekolah - Daftar Guru";
          $teachers = $this->teachers;

          return view("teachers.index", [
               'title' => $title,
               'teachers' => $teachers
          ]);
     }

     public function create()
     {
          $title = 'Sistem Sekolah - Tambah Guru';
          return view("teachers.create", [
              'title'=> $title
          ]);
     }

     public function store()
     {
          return "Melakukan penambahan data guru";
     }

     public function show(string $id)
     {
          $title = 'Sistem Sekolah - Detail Guru';

          $teacher = collect($this->teachers)->firstWhere('id', (int) $id);

          return view("teachers.show", [
              'title'   => $title,
              'teacher' => $teacher
          ]);
     }

     public function edit(string $id)
     {
          $title = 'Sistem Sekolah - Edit Guru';
          
          $teacher = collect($this->teachers)->firstWhere('id', (int) $id);

          return view("teachers.edit", [
              "title"   => $title,
              "teacher" => $teacher
          ]);
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
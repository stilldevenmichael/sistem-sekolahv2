<?php

namespace App\Http\Controllers\SchooClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id = null)
    {
        $title = 'Sistem Sekolah - Edit Kelas';

        $class = [
            'id'         => 1,
            'name'       => 'XII AKL 1',
            'grade'      => 'XII',
            'major_id'   => 1,
            'teacher_id' => 1,
        ];

        $majors = [
            ['id' => 1, 'code' => 'AKL', 'name' => 'Akuntansi dan Keuangan Lembaga'],
            ['id' => 2, 'code' => 'TKJ', 'name' => 'Teknik Komputer dan Jaringan'],
            ['id' => 3, 'code' => 'BiD', 'name' => 'Busana dan Desain'],
        ];

        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Aminah'],
        ];

        return view("classes.edit", [
            "title"    => $title,
            "class"    => $class,
            "majors"   => $majors,
            "teachers" => $teachers,
        ]);
    }
}
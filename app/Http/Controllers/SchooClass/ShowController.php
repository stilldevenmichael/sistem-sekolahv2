<?php

namespace App\Http\Controllers\SchooClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $title = 'Sistem Sekolah - Detail Kelas';

        $class = [
            'id' => $id,
            'name' => 'XII AKL 1',
            'grade' => 'XII',
            'major' => 'AKL',
            'homeroom_teacher' => 'Budi Santoso',
        ];

        return view('classes.show', compact('title', 'id', 'class'));
    }
}
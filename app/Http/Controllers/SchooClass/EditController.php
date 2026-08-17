<?php

namespace App\Http\Controllers\SchooClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $title = 'Sistem Sekolah - Edit Kelas';
        return view("classes.edit",[
            "title"=> $title
        ]);
    }
}

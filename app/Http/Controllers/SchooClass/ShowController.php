<?php

namespace App\Http\Controllers\SchooClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return "Menampilkan detail data kelas siswa";
    }
}

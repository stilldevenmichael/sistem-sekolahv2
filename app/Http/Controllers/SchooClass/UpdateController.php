<?php

namespace App\Http\Controllers\SchooClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return "Memperbaharui data kelas siswa";
    }
}

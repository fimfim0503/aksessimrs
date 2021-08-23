<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    //

    public function index($NORM)
    {
        $pasien = Pasien::where('NORM', $NORM)->first();

        return $pasien;
        // if (empty($pasien)) {
        //     return response()->json([
        //         "message" => "Data tidak ditemukan "
        //     ]);
        // } else {
        //     return response()->json([
        //         'hasil' => $pasien
        //     ]);
        // }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        return view('blog/blog');
    }

    public function getProfile($id)
    {
        // $nomor = ['nomor' => $id];
        // if ($id == 1) {
        //     $nomor['nomor'] += 5;
        // }

        $tables = DB::table('users')-> get();

        $nilai = $id;
        $nama = 'gusanta';
        return view('profile', [
            'nilai' => $nilai,
            'nama' => $nama,
            'hobi' => $tables
        ]);
    }


    public function dataDiri()
    {
        $nama = "Antariksa";
        $umur = 17;
        $alamat = "Banjar Tohjiwa";
        $hobi = "gitaran";
        $sekolah = "smk";
        $kelas = "XII RPL";
        $agama = "Hindu";

        return view('data', ['nama' => $nama, 'umur' => $umur, 'alamat' => $alamat, 'hobi' => $hobi, 'sekolah' => $sekolah, 'kelas' => $kelas, 'agama' => $agama]);
    }
}

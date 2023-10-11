<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Masyarakat;
use App\Models\Pengaduan;


class PengaduanController extends Controller
{
    function index()
    {
        $data = Pengaduan::all();

        return view('home', ['data' => $data]);
    }

    function tampil_isi_pengaduan()
    {

        return view('isi-pengaduan');
    }

    function proses_isi_pengaduan(Request $request)
    {

        // validasi
        $validated = $request->validate([
            'isi_laporan' => 'required|string',
            'foto' => 'required',
        ]);


        $nama = "";
        // Jika File Foto Ada
        if ($request->hasFile('foto')) {
            $nama = time() . $request->foto->getClientOriginalName();
            $request->foto->move('images', $nama);
        }

        // data yang akan dimasukan
        $data = [
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '10',
            'isi_laporan' => $request->isi_laporan,
            'foto' => $nama,
            'status' => 'baru'
        ];

        // Masukan Data Ke Table Pengaduan
        $simpan = Pengaduan::create($data);

        // redirect ke url Home
        return redirect('home');
    }

    function hapus($id)
    {
        DB::table('pengaduan')->where('id_pengaduan', '=', $id)->delete();

        return redirect()->back();
    }

    function detail_pengaduan($id)
    {
        $pengaduan = DB::table('pengaduan')
            ->join('masyarakat', 'pengaduan.nik', '=', 'masyarakat.nik')
            ->where('id_pengaduan', '=', $id)
            ->first();
        return view("detail_pengaduan", ["data" => $pengaduan]);
    }

    function tampil_update($id)
    {
        $title = "Update Data";
        $data = DB::table('pengaduan')->where('id_pengaduan', $id)->first();


        // return $data;

        return view('/update', [
            "data" => $data,
            "title" => $title
        ]);
    }

    function update($id, Request $request)
    {
        $isi_laporan = $request->isi_laporan;

        // echo $isi_laporan;
        // return;
        $foto = $request->foto;

        DB::table('pengaduan')
            ->where('id_pengaduan', $id)
            ->update([
                'isi_laporan' => $isi_laporan,
                'foto' => $foto
            ]);

        return redirect('/home');
    }
}

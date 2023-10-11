@extends('layout.app')
@section('title', 'Detail')
@section('content')
        <h1 class="text-center mt-2">Detail Pengaduan</h1>
            <div class="row g-3 align-items-center justify-content-center mt-3">
                <div class="col-auto">
                  <label for="id" class="col-form-label">ID Pengaduan :</label>
                </div>
                <div class="col-9">
                  <input type="text" id="id" class="form-control" value="{{ $data->id_pengaduan}}" disabled>
                </div>
              </div>
            <div class="row g-3 align-items-center justify-content-center mt-2">
                <div class="col-auto">
                  <label for="nik" class="col-form-label">Nik :</label>
                </div>
                <div class="col-9">
                  <input type="text" id="nik" class="form-control" value="{{ $data->nik}}" disabled>
                </div>
              </div>
            <div class="row g-3 align-items-center justify-content-center mt-2">
                <div class="col-auto">
                  <label for="nama" class="col-form-label">Nama :</label>
                </div>
                <div class="col-9">
                  <input type="text" id="nama" class="form-control" value="{{ $data->nama}}" disabled>
                </div>
              </div>
            <div class="row g-3 align-items-center justify-content-center mt-2">
                <div class="col-auto">
                  <label for="tanggal" class="col-form-label">Tanggal :</label>
                </div>
                <div class="col-9">
                  <input type="text" id="tanggal" class="form-control" value="{{ $data->tgl_pengaduan}}" disabled>
                </div>
              </div>
              <div class="row g-3 align-items-center justify-content-center mt-2">
                  <div class="col-auto">
                    <label for="isi" class="col-form-label">Laporan :</label>
                  </div>
                  <div class="col-9">
                    <input type="text" id="isi" class="form-control" value="{{ $data->isi_laporan}}" disabled>
                  </div>
                </div>
                <div class="row g-3 align-items-center justify-content-center mt-2">
                    <div class="col-auto">
                        <label for="foto">Foto Bukti :</label>
                    </div>
                    <div class="col-9">
                        <img src="{{asset("images/$data->foto")}}" alt="" width="500px" id="foto">
                    </div>
                </div>
                <div class="row g-3 align-items-center justify-content-center mt-2">
                    <div class="col-auto">
                        <label for="foto">Status :</label>
                    </div>
                    <div class="col-9">
                        <button type="button" class="btn btn-outline-info">{{$data->status}}</button>
                    </div>
                </div>
              
        </div>
        @endsection

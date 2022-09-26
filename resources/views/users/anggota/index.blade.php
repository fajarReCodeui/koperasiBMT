@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-secondary rounded shadow-sm">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="48" height="48" class="mr-3">
            <path fill="#ffffff"
                d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7V5zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0v-3.32z" />
        </svg>
        <div class="lh-100">
            <h6 class="mb-0 text-white lh-100">Data Anggota</h6>
            <small class="text-white">Semua data anggota</small>
        </div>
        <div class="ml-auto">
            <a href="{{route('users.create')}}">
                <button type="button" class="btn btn-outline-light text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20" class="mr-3">
                        <path fill="#ffffff"
                            d="M2 6H0v2h2v2h2V8h2V6H4V4H2v2zm7 0a3 3 0 0 1 6 0v2a3 3 0 0 1-6 0V6zm11 9.14A15.93 15.93 0 0 0 12 13c-2.91 0-5.65.78-8 2.14V18h16v-2.86z" />
                    </svg>
                    Tambah Anggota
                </button>
            </a>
        </div>
    </div>

    <div class="mb-3 pt-3">
        <div class="card border-0">
            <div class="card-body">
                <h6>Cari Laporan</h6>
                <form action="{{route('reports.anggota')}}" method="get">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="date" name="tgl_awal" id="" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="date" name="tgl_akhir" id="" class="form-control">
                            </div>
                        </div>
                        <div class="ml-3">
                            <div class="d-flex">
                                <button class="btn btn-outline-info">
                                    Cari Laporan
                                </button>
                                <a href="{{route('reports.all.anggota')}}" class="btn btn-outline-info ml-2">Cetak Semua Data</a>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <th scope="col">No.Anggota</th>
                <th scope="col">Nama</th>
                <th scope="col">T.T.L</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telephone</th>
                <th scope="col">NO.KTP</th>
                <th scope="col">Pendidikan Terakhir</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Suami/Istri/Orang Tua</th>
            </thead>
            <tbody>
                @forelse ($anggotas as $anggota)
                <tr>
                    <td>
                        <a href="{{route('users.edit', $pegawai->id)}}">
                            {{$pegawai->nik}}
                        </a>
                    </td>
                    <td>{{$pegawai->name}}</td>
                    <td>{{$pegawai->tempat_lahir}}, {{$pegawai->tanggal_lahir}}</td>
                    <td>{{$pegawai->alamat}}</td>
                    <td>{{$pegawai->phone}}</td>
                    <td>{{$pegawai->ktp}}</td>
                    <td>{{$pegawai->pendidikan_terakhir}}</td>
                    <td>{{$pegawai->pekerjaan}}</td>
                    <td>{{$pegawai->nama_wakil}}</td>
                    @empty
                <tr>
                    <td colspan="9">
                        Data anggota belum tersedia
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Verifikasi Pembayaran</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">Detail</div>
            </div>
        </div>
        <div class="section-body">
            <h3 class="section-title">Detail Siswa</h3>
            <table id="data-admin" class="table table-striped table-bordered table-md"
                style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
                <thead>
                    <tr>
                        <th>Nomer Registrasi</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>NISN</th>
                        <th>Asal Sekolah</th>
                        <th>No Hp</th>
                        <th>No Hp Ayah</th>
                        <th>No Hp Ibu</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $detailUser->id }}</td>
                            <td>{{ $detailUser->name }}</td>
                            <td>{{ $detailUser->email }}</td>
                            <td>{{ $detailUser->nisn }}</td>
                            <td>{{ $detailUser->asal_sekolah }}</td>
                            <td>{{ $detailUser->nohp }}</td>
                            <td>{{ $detailUser->nohp_ayah }}</td>
                            <td>{{ $detailUser->nohp_ibu }}</td>
                        </tr>
                </tbody>
            </table>
        </div>
    </section>
    <script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
@endsection

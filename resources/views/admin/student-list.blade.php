@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Verifikasi Pembayaran</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item">Verifikasi Pembayaran</div>
            </div>
        </div>
        <div class="section-body">
            <h3 class="section-title">Verifikasi Pembayaran</h3>
            <table id="data-admin" class="table table-striped table-bordered table-md"
                style="width: 100%; margin-top:5%; padding:2%;" cellspacing="1">
                <tbody>
                    <tr>
                        <th>Nomer Registrasi</th>
                        <th>Nama Lengkap</th>
                        <th>NISN</th>
                        <th>Asal Sekolah</th>
                        <th>No Hp</th>
                        <th>Email</th>
                        <th>No Hp Ayah</th>
                        <th>No Hp Ibu</th>
                    </tr>
                    @foreach ($data as $item)
                        @if ($item['role'] == 'user')
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->nisn }}</td>
                                <td>{{ $item->asal_sekolah }}</td>
                                <td>{{ $item->nohp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nohp_ayah }}</td>
                                <td>{{ $item->nohp_ibu }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    <script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
@endsection

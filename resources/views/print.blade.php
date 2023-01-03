<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wiush=device-wiush, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Registrasi</title>
    <link rel="stylesheet" href="/css/print.css">
</head>

<body onload="window.print()">
    <header>
        <div class="logo">
            <img src="/img/wkk.png">
        </div>
        <div class="item">
            <div class="title">PANITIA PENERIMAAN PESERTA DIDIK BARU</div>
            <div class="title">SMK Wikrama Bogor TP. 2023-2024</div>
            <div class="address">Jl. Raya Wangun Kel. Sindangsari Kec. Bogor Timur Kota Bogor</div>
            <div class="email">Email: <a href="mailto:prohumasi@smkwikrama.sch.id">prohumasi@smkwikrama.sch.id</a> |
                Website :
                <a href="http://smkwikrama.sch.id/" rel="noferrer" target="_SEJ">http://smkwikrama.sch.id/</a>
            </div>
        </div>
    </header>
    <main>
        <div class="header">
            <div class="title">TANDA BUKTI PEMBAYARAN SMK Wikrama Bogor TP. 2023-2024</div>
        </div>
        <div class="main-container">
            <div class="item-container-1">
                <div class="title-item-1"> I. BIODATA CALON PESERTA DIDIK</div>
                <table>
                    <thead>
                        <tr>
                            <th>TANGGAL DAFTAR</th>
                            <td id="tampil"></td>
                        </tr>
                        <tr>
                            <th>NOMOR SELEKSI</th>
                            <td>: {{ $data->id }}</td>
                        </tr>
                        <tr>
                            <th>NAMA LENGKAP</th>
                            <td>: {{ $data->name }}</td>
                        </tr>
                        <tr>
                            <th>NISN</th>
                            <td>: {{ $data->nisn }}</td>
                        </tr>
                        <tr>
                            <th>ASAL SEKOLAH</th>
                            <td>: {{ $data->asal_sekolah }}</td>
                        </tr>
                        <tr>
                            <th>NO HP</th>
                            <td>: {{ $data->nohp }}</td>
                        </tr>
                        <tr>
                            <th>EMAIL</th>
                            <td>: {{ $data->email }}</td>
                        </tr>
                        <tr>
                            <th>NO HP Ayah</th>
                            <td>: {{ $data->nohp_ayah }}</td>
                        </tr>
                        <tr>
                            <th>NO HP Ibu</th>
                            <td>: {{ $data->nohp_ibu }}</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="item-container-2">
            <div class="item-1">
                <div class="title-item-2">II. INFORMASI DAN PERSYARATAN</div>
                <h4>A. Akun Anda</h4>
                <p>Akses <a href="https://ppdb.smkwikrama.sch.id/student" rel="noreferrer"
                        target="_SEJ">ppdb-smkwikrama/student</a>, login gunakan</p>
                <p>Email: {{ $data->email }}</p>
                <p>Password: {{ $data->nisn }}</p>
                <p>Akun ini digunakan untuk mengecek status pendaftaran pada SIM PPDB SMK Wikrama Bogor</p>
            </div>
            <div class="item-2">
                <h4>B. Foto/Scan Dokumen yang Harus Dipersiapkan</h4>
                <ol type=1>
                    <li>Persyaratan satu</li>
                    <li>Persyaratan dua</li>
                    <li>Persyaratan tiga</li>
                </ol>
                <h4>C. Biaya Seleksi</h4>
                <p>Pembayaran uang seleksi sebesar Rp. 200.000 melalui transfer bank: Bank BNI: 12345678 A.N SMK Wikrama
                    Sekolah.</p>
            </div>
        </div>
    </main>
</body>

<script>
    var date = new Date();
    var tahun = date.getFullYear();
    var bulan = date.getMonth();
    var tanggal = date.getDate();
    var hari = date.getDay();
    switch (hari) {
        case 0:
            hari = "Minggu";
            break;
        case 1:
            hari = "Senin";
            break;
        case 2:
            hari = "Selasa";
            break;
        case 3:
            hari = "Rabu";
            break;
        case 4:
            hari = "Kamis";
            break;
        case 5:
            hari = "Jum'at";
            break;
        case 6:
            hari = "Sabtu";
            break;
    }
    switch (bulan) {
        case 0:
            bulan = "Januari";
            break;
        case 1:
            bulan = "Februari";
            break;
        case 2:
            bulan = "Maret";
            break;
        case 3:
            bulan = "April";
            break;
        case 4:
            bulan = "Mei";
            break;
        case 5:
            bulan = "Juni";
            break;
        case 6:
            bulan = "Juli";
            break;
        case 7:
            bulan = "Agustus";
            break;
        case 8:
            bulan = "September";
            break;
        case 9:
            bulan = "Oktober";
            break;
        case 10:
            bulan = "November";
            break;
        case 11:
            bulan = "Desember";
            break;
    }
    var tampilTanggal = ": " + hari + " " + tanggal + " " + bulan + " " + tahun;

    document.getElementById("tampil").innerHTML = tampilTanggal;
</script>

</html>

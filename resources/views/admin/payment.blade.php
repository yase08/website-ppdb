@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Pembayaran</h1>
            <div class="section-header-breadcrumb">
            </div>
        </div>
        @if (Auth::user()->role == 'user')
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
        @endif
        <div class="section-body">
            <h3 class="section-title">Pembayaran</h3>
            <form method="POST" action="{{ route('paymentStore') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Pembayaran</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-4">
                                        <label>Nama Rekening Bank</label>
                                        <select class="form-control" name="bank_name" id="nama_bank" onchange="show()">
                                            <option></option>
                                            <option>esempe 1</option>
                                            <option>esempe 2</option>
                                            <option>esempe 3</option>
                                            <option>esempe 4</option>
                                            <option>esempe 5</option>
                                            <option>esempe 6</option>
                                            <option>esempe 7</option>
                                            <option value="lainnya">lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Nama Pemilik Rekening</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Masukan Nama Pemilik Rekening">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Nominal</label>
                                        <input type="text" class="form-control" name="nominal" id="dengan-rupiah"
                                            placeholder="Masukan Nominal Uang">
                                    </div>
                                    <div class="col-sm-4" style="display: none;" id="bank_lainnya">
                                        <label>Nama Rekening Bank</label>
                                        <input type="text" class="form-control" name="bank_lainnya"
                                            placeholder="Masukan Nama Rekening Bank">
                                    </div>
                                </div>
                                <br>
                                <div class="row align-items-start">
                                    <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="image" name="image">
                                        <label class="input-group-text" for="image">Upload</label>
                                    </div>
                                </div>
                                <br>
                                <div class="row align-items-start">
                                    <div class="col-sm-8"></div>
                                    <div class="col-sm-4">
                                        <input type="submit" value="Submit" class="btn btn-block btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="../../assets/admin/dataTables/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/admin/dataTables/js/dataTables.bootstrap4.min.js"></script>
    <script>
        var dengan_rupiah = document.getElementById('dengan-rupiah');
        dengan_rupiah.addEventListener('keyup', function(e) {
            dengan_rupiah.value = formatRupiah(this.value, 'Rp. ');
        });

        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        function show() {
            const bank_name = document.getElementById("nama_bank").value;
            const bank_lainnya = document.getElementById("bank_lainnya");

            if (bank_name == "lainnya") {
                bank_lainnya.style.display = "";
            } else {
                bank_lainnya.style.display = "none";
            }
        }
    </script>
@endsection

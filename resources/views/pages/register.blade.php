<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    <script type="text/javascript" src="jquery-1.7.min.js"></script>
    <script>
        function show() {
            var asal_sekolah = document.getElementById("asal_sekolah").value;
            var lainnya = document.getElementById("sekolah_lainnya");
            if (asal_sekolah == "lainnya") {
                lainnya.style.display = "";
            } else {
                lainnya.style.display = "none";
            }
        }
    </script>
    <style>
        body {
            background-color: #29c5d4;
        }
    </style>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Form Pendaftaran PPDB</h3>
                                    <h5 class="text-center font-weight-light my-4">SMK Wikrama Bogor TP. 2023-2024</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('registerStore') }}" method="POST">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="namalengkap" type="text"
                                                        placeholder="Masukan Nama Lengkap" name="name" />
                                                    <label for="inputFirstName">Nama Lengkap</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <input class="form-control" id="nisn" type="number"
                                                        placeholder="Masukan NISN" name="nisn" />
                                                    <label for="inputLastName">NISN</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="email" type="email"
                                                placeholder="Masukan Email Aktif" name="email" />
                                            <label for="inputEmail">Email Aktif</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="theSelect form-control" name="asal_sekolah" id="asal_sekolah"
                                                onchange="show()">
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
                                        <div class="form-floating mb-3" id="sekolah_lainnya" style="display: none;">
                                            <input class="form-control" type="text"
                                                placeholder="Masukan Nama Sekolah" name="sekolah_lainnya" />
                                            <label for="asal_sekolah">Masukan Nama Sekolah</label>
                                        </div>
                                        <select name="jk" class="form-select mb-3">
                                            <option hidden>Jenis Kelamin</option>
                                            <option value="perempuan">Perempuan</option>
                                            <option value="laki_laki">Laki - Laki</option>
                                        </select>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="nohp" type="number"
                                                placeholder="Contoh: 08....." name="nohp" />
                                            <label for="nohp">Nomer Handphone</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="nohp" type="number"
                                                placeholder="Contoh: 08....." name="nohp_ayah" />
                                            <label for="nohp">Nomer Handphone Ayah</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="nohp" type="number"
                                                placeholder="Contoh: 08....." name="nohp_ibu" />
                                            <label for="nohp">Nomer Handphone Ibu</label>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <button class="d-grid btn btn-lg btn-primary mt-4"
                                                data-target="">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script>
        $(".theSelect").select2({
            placeholder: 'Asal Sekolah',
            allowClear: true
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>

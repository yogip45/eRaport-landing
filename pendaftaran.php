<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!----google font---->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!----font awesome---->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Pendaftaran Mahasiswa Baru</title>
    <link rel="icon" type="image/x-icon" href="img/logopnc.png">
</head>

<body>
    <!-- Pendaftaran start -->
    <section id="pendaftaran" class="mt-5 mb-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                <div class="card custom-card">
                    <div>
                        <h4 class="d-block mt-3 text-uppercase">Form Data Siswa</h4>
                        <form class="row g-3" method="POST" action="tambahmhs.php">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="col-md-3">
                                <label for="inputPassword4" class="form-label">NISN</label>
                                <input type="text" class="form-control" id="nik" name="nis">
                            </div>
                            <div class="col-2">
                                <label for="inputAddress" class="form-label">Tahun Ajaran (Ex. 2017)</label>
                                <input type="text" class="form-control" id="Tlahir" name="tahun">
                            </div>
                            <div class="col-3">
                                <label for="inputAddress" class="form-label">Kelas</label>
                                <input type="text" class="form-control" id="Tlahir" name="kelas">
                            </div>
                            <div class="col-6">
                                <span class="form-label">Jenis Kelamin</span><br>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="Jkelamin" name="jk"
                                        value="Laki - Laki">
                                    <label class="form-check-label" for="Jkelamin">
                                        Laki - Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jk" id="Jkelamin" name="jk"
                                        value="Perempuan">
                                    <label class="form-check-label" for="Jkelamin">
                                        Perempuan
                                    </label>
                                </div>

                            </div>
                            <!-- <div class="col-12">
                                <label for="inputAddress2" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" placeholder="1234 Yerusalem DIY">
                            </div> -->
                            <!-- <div class="col-12">
                                <label for="inputAddress2" class="form-label">Program Studi</label>
                                <select id="Pstudi" class="form-select">
                                    <option selected>Pilih...</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Teknik Elektronika">Teknik Elektronika</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Listrik">Teknik Listrik</option>
                                    <option value="Rekayasa Keamanan Cyber">Rekayasa Keamanan Cyber</option> -->
                                </select>

                            <!-- </div>
                            <div class="col-md-4">
                                <label for="inputCity" class="form-label">Asal Sekolah</label>
                                <input type="text" class="form-control" id="Asekolah">
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Status Sekolah</label>
                                <select id="Ssekolah" class="form-select">
                                    <option selected>Pilih...</option>
                                    <option value="Negeri">Negeri</option>
                                    <option value="Swasta">Swasta</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="inputZip" class="form-label">Informasi Tambahan</label>
                                <input type="text" class="form-control" id="Itambahan">
                            </div> -->
                            <div class="col-12">
                                <!-- <button type="submit" class="btn btn-primary" onclick="CetakKartu()">Daftar</button> -->
                                <a href="#cetak">
                                    <input type="submit" value="simpan" class="btn btn-primary" href="#cetak"
                                        onclick="CetakKartu()">
                                </a>
                                <!-- <button class="btn btn-success col-md-1" onclick="window.print()">Cetak</button> -->
                                <!-- <a href="">
                                    <input type="button" value="Print" class="btn btn-success m-lg-auto" href=""
                                        onclick="window.print()">
                                </a> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pendaftaran End -->

    <!-- Cetak Form -->
    <!-- Pendaftaran start -->
    <section id="cetak" class="mt-5 mb-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-12">
                <div class="card custom-card">
                    <div class="text-center">
                        <h4 class="d-block mt-3 text-uppercase">Kartu Pendaftaran</h4>
                        <!-- Table Kartu -->
                        <table class="table table-light table-bordered border-primary">
                            <tr class="table-light text-lg-start">
                                <td style="width:10% ;" class="table-light" rowspan="5">
                                    <img src="img/profile.jpg" alt="" class="profile">
                                </td>
                                <td class="table-light fw-bold">Nama</td>
                                <td class="table-light" colspan="2"><span id="_nama"></span></td>
                            </tr>
                            <tr class="table-light text-lg-start">
                                <!-- <td class="table-light"></td> -->
                                <td class="table-light fw-bold">NISN</td>
                                <td class="table-light" colspan="2"><span id="_nik"></span></td>
                            </tr>
                            <tr class="table-light text-lg-start">
                                <!-- <td class="table-light"></td> -->
                                <td class="table-light fw-bold">Tanggal Lahir (thn/bln/tgl)</td>
                                <td class="table-light" colspan="2"><span id="_Tlahir"></span></td>
                            </tr>
                            <tr class="table-light text-lg-start">
                                <!-- <td class="table-light"></td> -->
                                <td class="table-light fw-bold">Jenis Kelamin</td>
                                <td class="table-light" colspan="2"><span id="_Jkelamin"></span></td>
                            </tr>
                            <tr class="table-light text-lg-start">
                                <!-- <td class="table-light"></td> -->
                                <td class="table-light fw-bold">Nomor Peserta</td>
                                <td class="table-light" colspan="2"><span id="_Npeserta">45-5346-45572</span></td>
                            </tr>
                            <tr class="table-light text-lg-start">
                                <td class="table-light fw-bold" colspan="2">Alamat</td>
                                <td class="table-light" colspan="2"><span id="_alamat"></span></td>
                            </tr>
                            <tr class="table-light text-lg-start">
                                <td class="table-light fw-bold" colspan="2">Tanggal Pendaftaran</td>
                                <td class="table-light" colspan="2">23 September 2022</td>
                            </tr>
                            <tr class="table-light text-lg-start">
                                <td class="table-light fw-bold" colspan="2">Program Studi</td>
                                <td class="table-light" colspan="2"><span id="_Pstudi"></span></td>
                            </tr>
                            <tr class="table-light text-lg-start">
                                <td class="table-light fw-bold" colspan="2">Asal Sekolah</td>
                                <td class="table-light" colspan="2"><span id="_Asekolah"></span></td>
                            </tr>
                            <tr class="table-light text-lg-start">
                                <td class="table-light fw-bold" colspan="2">Status Sekolah</td>
                                <td class="table-light" colspan="2"><span id="_Ssekolah"></span></td>
                            </tr>
                            <tr class="table-light text-lg-start">
                                <td class="table-light fw-bold" colspan="2">Informasi Tambahan</td>
                                <td class="table-light" colspan="2"><span id="tambahan"></span></td>
                            </tr>
                        </table>
                        <!-- Akhir table kartu -->
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Cetak Form End -->
    <!-- JS MAIn -->
    <script src="js/main.js"></script>
</body>

</html>
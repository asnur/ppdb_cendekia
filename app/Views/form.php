<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/sweetalert2/sweetalert2.min.css">

    <title>Penerimaan Peserta Didik Baru</title>
</head>

<body>
    <?php
    if (session()->getFlashdata('pesan')) :
    ?>
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <?php endif ?>
    <div class="col-md-6 mx-auto mt-5 mb-5">
        <div class="card">
            <div class="card-body">
                <center>
                    <img src="/assets/img/Logo.png" class="logo mt-3 mb-3">
                    <h3><b>PPDB PAUD CENDEKIA KAMAYEL</b></h3>
                </center>
                <div class="container">
                    <form action="/pendaftaran/daftar" method="POST" class="mt-5">
                        <?= csrf_field(); ?>
                        <label><b>Nama Lengkap</b></label>
                        <input type="text" name="nama" placeholder="Masukan Nama Lengkap" class="form-control" autocomplete="off" required>
                        <label class="mt-3"><b>Jenis Kelamin</b></label><br>
                        <input type="radio" name="jenis_kalamin" value="Laki-Laki" required> Laki-Laki
                        <input type="radio" name="jenis_kalamin" value="Perempuan" required> Perempuan<br>
                        <label class="mt-3"><b>Nomor Induk Kependudukan</b></label>
                        <input type="number" name="nik" placeholder="Masukan NIK" class="form-control" required autocomplete="off">
                        <label class="mt-3"><b>Tempat Lahir</b></label>
                        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" required autocomplete="off">
                        <label class="mt-3"><b>Tanggal Lahir</b></label>
                        <input type="date" name="tgl_lahir" placeholder="tanggal_lahir" class="form-control" required autocomplete="off">
                        <label class="mt-3"><b>Kewarganegaraan</b></label><br>
                        <input type="radio" name="kewarganegaraan" value="WNI" required> WNI
                        <input type="radio" name="kewarganegaraan" value="WNA" required> WNA<br>
                        <label class="mt-3"><b>Alamat Lengkap</b></label>
                        <input type="text" name="alamat" placeholder="Masukan Alamat Lengkap" class="form-control" required autocomplete="off">
                        <label class="mt-3"><b>Tinggal Bersama</b></label>
                        <select name="tinggal" class="form-control" required>
                            <option value="Orang Tua">Orang Tua</option>
                            <option value="Saudara">Saudara</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <label class="mt-3"><b>Anak Ke</b></label>
                        <input type="number" name="anak_ke" placeholder="Anak Ke..." class="form-control" required autocomplete="off">
                        <label class="mt-3"><b>Usia</b></label>
                        <input type="number" name="usia" placeholder="Masukan Usia" class="form-control" required autocomplete="off">
                        <button type="submit" class="btn btn-success mt-4 mb-4 p-2 form-control"><i class="fa fa-paper-plane"></i> Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="/assets/sweetalert2/sweetalert2.all.min.js"></script>
    <script>
        const flashdata = $('.flash-data').data('flashdata');
        if (flashdata == 'Pendaftaran Berhasil') {
            Swal.fire(
                'Berhasil',
                flashdata,
                'success'
            );
        }
    </script>
</body>

</html>
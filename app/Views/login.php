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
    <style>
        body {
            height: 100vh;
        }
    </style>
</head>

<body>
    <?php
    if (session()->getFlashdata('pesan')) :
    ?>
        <div class="flash-data" data-flashdata="<?= session()->getFlashdata('pesan'); ?>"></div>
    <?php endif ?>
    <div class="col-md-5 mx-auto mt-5 mb-3">
        <div class="card">
            <div class="card-body">
                <center>
                    <img src="/assets/img/Logo.png" class="logo mt-3 mb-3">
                    <h3 class="mb-3"><b>PAUD CENDEKIA KAMAYEL</b></h3>
                </center>
                <div class="container mt-4">
                    <form action="/login/cek_login" method="post">
                        <?= csrf_field() ?>
                        <label><b>Username</b></label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
                        <label class="mt-3"><b>Password</b></label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan Password" required><br>
                        <button type="submit" class="btn btn-success form-control p-2 mt-3 mb-5"><i class="fa fa-sign-in"></i> Login</button>
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
        if (flashdata == 'Login Berhasil') {
            Swal.fire(
                'Berhasil',
                flashdata,
                'success'
            );
        }
        if (flashdata == 'Username & Password Salah') {
            Swal.fire(
                'Login Gagal',
                flashdata,
                'error'
            );
        }
    </script>
</body>

</html>
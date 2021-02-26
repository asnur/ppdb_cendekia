<?= $this->extend('layout/template_admin') ?>
<?= $this->section('content') ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Admin Dashboard</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                        <i class="fa fa-users"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text"><?= $siswa_l ?></p>
                        <p class="text-muted">Siswa Laki-Laki</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-red set-icon">
                        <i class="fa fa-users"></i>
                    </span>
                    <div class="text-box">
                        <p class="main-text"><?= $siswa_p ?></p>
                        <p class="text-muted">Siswa Perempuan</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. PAGE INNER  -->
        <a href="/admin/tambah_siswa" class="btn btn-success" style="margin-bottom: 10px !important;"><i class="fa fa-plus"></i> Tambah Data</a><br>
        <div class="card mt-3">
            <div class="card-body">
                <table class="table table-striped table-bordered mt-5" id="tableSiswa">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($siswa as $s) {
                        ?>
                            <tr>
                                <td><?= $s['nama'] ?></td>
                                <td><?= $s['alamat'] ?></td>
                                <td><?= $s['jenis_kelamin'] ?></td>
                                <td><?= $s['usia'] ?></td>
                                <td><a href="/admin/edit_siswa/<?= $s['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a> <a href="/admin/hapus_siswa/<?= $s['id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <?= $this->endSection(); ?>
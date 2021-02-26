<?= $this->extend('layout/template_admin') ?>
<?= $this->section('content') ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Tambah Data Siswa</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <form action="/admin/save_tambah_siswa" method="POST" class="mt-3">
            <?= csrf_field(); ?>
            <label><b>Nama Lengkap</b></label>
            <input type="text" name="nama" placeholder="Masukan Nama Lengkap" class="form-control" autocomplete="off" required><br>
            <label><b>Jenis Kelamin</b></label><br>
            <input type="radio" name="jenis_kalamin" value="Laki-Laki" required> Laki-Laki
            <input type="radio" name="jenis_kalamin" value="Perempuan" required> Perempuan<br><br>
            <label><b>Nomor Induk Kependudukan</b></label>
            <input type="number" name="nik" placeholder="Masukan NIK" class="form-control" required autocomplete="off"><br>
            <label><b>Tempat Lahir</b></label>
            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" required autocomplete="off"><br>
            <label><b>Tanggal Lahir</b></label>
            <input type="date" name="tgl_lahir" placeholder="tanggal_lahir" class="form-control" required autocomplete="off"><br>
            <label><b>Kewarganegaraan</b></label><br>
            <input type="radio" name="kewarganegaraan" value="WNI" required> WNI
            <input type="radio" name="kewarganegaraan" value="WNA" required> WNA<br><br>
            <label><b>Alamat Lengkap</b></label>
            <input type="text" name="alamat" placeholder="Masukan Alamat Lengkap" class="form-control" required autocomplete="off"><br>
            <label><b>Tinggal Bersama</b></label>
            <select name="tinggal" class="form-control" required>
                <option value="Orang Tua">Orang Tua</option>
                <option value="Saudara">Saudara</option>
                <option value="Lainnya">Lainnya</option>
            </select><br>
            <label><b>Anak Ke</b></label>
            <input type="number" name="anak_ke" placeholder="Anak Ke..." class="form-control" required autocomplete="off"><br>
            <label><b>Usia</b></label>
            <input type="number" name="usia" placeholder="Masukan Usia" class="form-control" required autocomplete="off"><br>
            <button type="submit" class="btn btn-success mt-4 mb-4 p-2"><i class="fa fa-paper-plane"></i> Kirim</button>
        </form>

    </div>
</div>
<?= $this->endSection(); ?>
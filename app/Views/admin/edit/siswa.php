<?= $this->extend('layout/template_admin') ?>
<?= $this->section('content') ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Edit Data Siswa</h2>
            </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <form action="/admin/save_edit_siswa" method="POST" class="mt-3">
            <?= csrf_field(); ?>
            <input type="hidden" name="id" value="<?= $siswa['id'] ?>">
            <label><b>Nama Lengkap</b></label>
            <input type="text" name="nama" placeholder="Masukan Nama Lengkap" class="form-control" autocomplete="off" value="<?= $siswa['nama'] ?>" required><br>
            <label><b>Jenis Kelamin</b></label><br>
            <input type="radio" name="jenis_kalamin" value="Laki-Laki" required <?= ($siswa['jenis_kelamin'] == 'Laki-Laki') ? 'checked' : '' ?>> Laki-Laki
            <input type="radio" name="jenis_kalamin" value="Perempuan" required <?= ($siswa['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>> Perempuan<br><br>
            <label><b>Nomor Induk Kependudukan</b></label>
            <input type="number" name="nik" placeholder="Masukan NIK" class="form-control" required autocomplete="off" value="<?= $siswa['nik'] ?>"><br>
            <label><b>Tempat Lahir</b></label>
            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" required autocomplete="off" value="<?= $siswa['nama'] ?>" value="<?= $siswa['tempat_lahir'] ?>"><br>
            <label><b>Tanggal Lahir</b></label>
            <input type="date" name="tgl_lahir" placeholder="tanggal_lahir" class="form-control" required autocomplete="off" value="<?= $siswa['tanggal_lahir'] ?>"><br>
            <label><b>Kewarganegaraan</b></label><br>
            <input type="radio" name="kewarganegaraan" value="WNI" required <?= ($siswa['kewarganegaraan'] == 'WNI') ? 'checked' : '' ?>> WNI
            <input type="radio" name="kewarganegaraan" value="WNA" required <?= ($siswa['kewarganegaraan'] == 'WNA') ? 'checked' : '' ?>> WNA<br><br>
            <label><b>Alamat Lengkap</b></label>
            <input type="text" name="alamat" placeholder="Masukan Alamat Lengkap" class="form-control" required autocomplete="off" value="<?= $siswa['alamat'] ?>"><br>
            <label><b>Tinggal Bersama</b></label>
            <select name="tinggal" class="form-control" required>
                <option value="Orang Tua" <?= ($siswa['tinggal'] == 'Orang Tua') ? 'selected' : '' ?>>Orang Tua</option>
                <option value="Saudara" <?= ($siswa['tinggal'] == 'Saudara') ? 'selected' : '' ?>>Saudara</option>
                <option value="Lainnya" <?= ($siswa['tinggal'] == 'Lainnya') ? 'selected' : '' ?>>Lainnya</option>
            </select><br>
            <label><b>Anak Ke</b></label>
            <input type="number" name="anak_ke" placeholder="Anak Ke..." class="form-control" required autocomplete="off" value="<?= $siswa['anak_ke'] ?>"><br>
            <label><b>Usia</b></label>
            <input type="number" name="usia" placeholder="Masukan Usia" class="form-control" required autocomplete="off" value="<?= $siswa['usia'] ?>"><br>
            <button type="submit" class="btn btn-success mt-4 mb-4 p-2"><i class="fa fa-paper-plane"></i> Kirim</button>
        </form>

    </div>
</div>
<?= $this->endSection(); ?>
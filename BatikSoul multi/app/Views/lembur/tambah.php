<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>



<!-- Form tambah data -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> <i class="fas fa-fw  fa-user-circle"></i> Form Tambah Data Lembur</h6>
    </div>
    <div class="card-body">

        <form action="/lembur/simpan" method="POST" enctype="multipart/form-data">
            <?= csrf_field(); ?>

            <!-- <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" autofocus value="<?= old('kode_karyawan'); ?>">
                <div class=" invalid-feedback">
                <?= $validation->getError('kode_karyawan'); ?>
                </div>
            </div> -->


            <div class="form-group">
                <label for="kode_karyawan">Kode Karyawan </label>
                <div class="">
                                                <select name="kode_karyawan"  class="form-control  <?= ($validation->hasError('kode_karyawan')) ? 
                                                    'is-invalid' : ''; ?>"  autofocus value="<?= old('kode_karyawan'); ?>">>
                                                    <option value="kode_karyawan">Pilih</option>
                                                        <?php foreach ($penggajian as $row2) :?>
                                                            <option value="<?= $row2['kode_karyawan'];?>"><?=$row2['kode_karyawan'];?></option>';
                                                        <?php endforeach; ?>
                                                </select>
                                            </div>
                                            </div>
            <div class="form-group">
                <label for="nama">Nama </label>
                <div class="">
                                                <select name="nama"  class="form-control  <?= ($validation->hasError('nama')) ? 
                                                    'is-invalid' : ''; ?>"  autofocus value="<?= old('nama'); ?>">>
                                                    <option value="nama">Pilih</option>
                                                        <?php foreach ($penggajian as $row2) :?>
                                                            <option value="<?= $row2['nama'];?>"><?=$row2['nama'];?></option>';
                                                        <?php endforeach; ?>
                                                </select>
                                            </div>
                                            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal </label>
                <input type="date" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" id="tanggal" name="tanggal" autofocus value="<?= old('tanggal'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('tanggal'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="jumlah_lembur">Jumlah Lembur </label>
                <input type="text" class="form-control <?= ($validation->hasError('jumlah_lembur')) ? 'is-invalid' : ''; ?>" id="jumlah_lembur" name="jumlah_lembur" autofocus value="<?= old('jumlah_lembur'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('jumlah_lembur'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="uang_lembur">Uang Lembur </label>
                <input type="text" class="form-control <?= ($validation->hasError('uang_lembur')) ? 'is-invalid' : ''; ?>" id="uang_lembur" name="uang_lembur" autofocus value="<?= old('uang_lembur'); ?>">
                <div class="invalid-feedback">
                    <?= $validation->getError('uang_lembur'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="tunjangan">Tunjangan </label>
                <div class="">
                                                <select name="tunjangan"  class="form-control  <?= ($validation->hasError('tunjangan')) ? 
                                                    'is-invalid' : ''; ?>"  autofocus value="<?= old('tunjangan'); ?>">>
                                                    <option value="tunjangan">Pilih</option>
                                                        <?php foreach ($penggajian as $row2) :?>
                                                            <option value="<?= $row2['tunjangan'];?>"><?=$row2['tunjangan'];?></option>';
                                                        <?php endforeach; ?>
                                                </select>
                                            </div>
            </div>
            
            <div class="form-group">
                <label for="gaji_pokok">Gaji Pokok </label>
                <div class="">
                                                <select name="gaji_pokok"  class="form-control  <?= ($validation->hasError('gaji_pokok')) ? 
                                                    'is-invalid' : ''; ?>"  autofocus value="<?= old('gaji_pokok'); ?>">>
                                                    <option value="gaji_pokok">Pilih</option>
                                                        <?php foreach ($penggajian as $row2) :?>
                                                            <option value="<?= $row2['gaji_pokok'];?>"><?=$row2['gaji_pokok'];?></option>';
                                                        <?php endforeach; ?>
                                                </select>
                                            </div>
            </div>



            <button type="submit" class="btn btn-primary"><i class="fas fa-check-circle"></i> Submit</button>

            <a href="/lembur" class="btn btn-success"><i class="fas fa-undo"></i> Back</a>

        </form>
    </div>
</div>





<?= $this->endSection(); ?>
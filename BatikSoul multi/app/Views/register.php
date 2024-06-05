<?= $this->extend('layout/template_login'); ?>
<?= $this->section('content_login'); ?>

<div class="row justify-content-center">

    <div class="col-xl-5 col-lg-8 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="p-2">
                    <div class="login-logo">

                        <div class="col-md-12 text-center">

                            <div class="flex flex-row mx-auto max-w-screen lg:flex-row justify-between">



                                <div class="text-center">
                                    <h3 class="text-center">Daftar</h3>
                                </div>
                                <?php if (isset($validation)) : ?>
                                    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
                                <?php endif; ?>
                                <form action='<?= base_url('home/insert_user'); ?>' method="post">
                                    <div class="form-group col-sm-12 text-left">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username" class="form-control" placeholder='' aria-describedby="helpid">
                                    </div>
                                    <div class=" form-group col-sm-12 text-left">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" class="form-control" placeholder='' aria-describedby="helpid">
                                    </div>
                                    <div class=" form-group col-sm-12 text-left">
                                        <label for="pass">Password</label>
                                        <input type="password" name="pass" id="pass" class="form-control" placeholder='' aria-describedby="helpid">
                                    </div>
                                    <div class=" form-group col-sm-12 text-left">
                                        <label for="jenis">Jenis</label>
                                        <select class="form-control" name="jenis" id="jenis">
                                            <option value="hrd">HRD</option>
                                            <option value="supplier">Supplier</option>
                                            <option value="stok">Stok</option>
                                            <option value="produksi">Produksi</option>
                                            <option value="penjualan">Penjualan</option>
                                            <option value="distributor">Distributor</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-use ">Register</button>
                                    </div>
                                </form>

                                <div class="text-center">
                                    <a class="small" href="login">Already have an account? Login!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>
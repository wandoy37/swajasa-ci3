<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <h2 class="pb-2 fw-bold">Dashboard <small class="text-muted">Control Panel</small></h2>
            <div class="row">
                <div class="col-sm">
                    <a href="<?php echo base_url() . '' ?>" class="btn btn-primary rounded"><i class="fas fa-eye"></i> Lihat website</a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "update_success") {
                            echo "<div class='alert alert-success font-weight-bold rounded'>Success Update !</div>";
                        } else if ($_GET['alert'] == "berhasil_login") {
                            echo "<div class='alert alert-success font-weight-bold rounded'>Login Berhasil !</div>";
                        } else if ($_GET['alert'] == "gagal_update") {
                            echo "<div class='alert alert-danger font-weight-bold rounded'>Gagal Update !</div>";
                        }
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="card">
                        <div class="card-body">
                            <?php foreach ($kontak as $k) { ?>
                                <form action="<?php echo base_url('dashboard/update_kontak') ?>" method="POST">
                                    <div class="row pt-4 ml-auto">
                                        <div class="col-sm">
                                            <h4 class="pb-2 fw-bold">Company Contact <small class="text-muted">Company Information</small></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" class="form-control" placeholder="Alamat" required value="<?php echo $k->alamat; ?>">
                                                <?php echo form_error('alamat'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control" placeholder="Email" required value="<?php echo $k->email; ?>">
                                                <?php echo form_error('email'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label>Nomor Handphon</label>
                                                <input type="text" name="nohp" class="form-control" placeholder="Nomor Handphon" required value="<?php echo $k->nohp; ?>">
                                                <?php echo form_error('nohp'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label>Nomor WhatsApp</label>
                                                <input type="text" name="nowa" class="form-control" placeholder="Nomor WhatsApp" required value="<?php echo $k->nowa; ?>">
                                                <?php echo form_error('nowa'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Sosial Media -->
                                    <div class="row pt-4 ml-auto">
                                        <div class="col-sm">
                                            <h4 class="pb-2 fw-bold">Social Media <small class="text-muted">Media Information</small></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" name="instagram" class="form-control" placeholder="Instagram" required value="<?php echo $k->instagram; ?>">
                                                <?php echo form_error('instagram'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" name="facebook" class="form-control" placeholder="Facebook" required value="<?php echo $k->facebook; ?>">
                                                <?php echo form_error('facebook'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="text" name="twitter" class="form-control" placeholder="Twitter" required value="<?php echo $k->twitter; ?>">
                                                <?php echo form_error('twitter'); ?>
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label>Linkedin</label>
                                                <input type="text" name="linkedin" class="form-control" placeholder="Linkedin" required value="<?php echo $k->linkedin; ?>">
                                                <?php echo form_error('linkedin'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" value="Update">
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
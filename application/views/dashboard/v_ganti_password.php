<div class="main-panel">
    <div class="container">
        <div class="page-inner">
            <h2 class="pb-2 fw-bold">Ganti Password <small class="text-muted">Security</small></h2>
            <a href="<?php echo base_url() . 'dashboard' ?>" class="btn"><i class="fas fa-home pb-4"></i> Dashboard</a>

            <div class="row">
                <div class="col-sm">
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "berhasil_ganti_password") {
                            echo "<div class='alert alert-success font-weight-bold rounded'>Berhasil ganti password !</div>";
                        } else if ($_GET['alert'] == "gagal_ganti_password") {
                            echo "<div class='alert alert-danger font-weight-bold rounded'>Gagal ganti password !</div>";
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <table class="table">
                        <?php
                        $id_user = $this->session->userdata('id');
                        $user = $this->db->query("select * from pengguna where pengguna_id='$id_user'")->row();
                        ?>
                        <tbody>
                            <tr>
                                <td width="50%">Username : </td>
                                <td class="text-center text-uppercase"><?php echo $user->pengguna_username; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <form action="<?php echo base_url('dashboard/change_password') ?>" method="POST">
                        <div class="form-group">
                            <label>Password Lama</label>
                            <input type="password" name="password_lama" class="form-control" placeholder="Password lama" required>
                            <?php echo form_error('password_lama'); ?>
                        </div>
                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password" name="password_baru" class="form-control" placeholder="Password baru" required>
                            <?php echo form_error('password_baru'); ?>
                        </div>
                        <div class="form-group">
                            <label>Konfirmasi Password Baru</label>
                            <input type="password" name="konfirmasi_password" class="form-control" placeholder="Konfirmasi password baru" required>
                            <?php echo form_error('konfirmasi_password'); ?>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Change Password">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
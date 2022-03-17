<!-- Contact Us -->
<section id="kontak">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm">
                <p><small class="text-muted">Hubungi kami melalui kanal telepon dan email atau datang langsung di kantor layanan kami.</small></p>
            </div>
        </div>
        <div class="row p-4 d-flex justify-content-around align-items-center">
            <div class="col-sm-6">
                <img src="<?php echo base_url() . 'assets/landingpages' ?>/img/Artboard8.png" class="img-fluid" width="300" alt="">
                <table class="table">
                    <?php foreach ($kontak as $k) { ?>
                        <tbody>
                            <tr>
                                <td><i class="fa-solid fa-phone text-primary"></td>
                                <td>
                                    <?php echo $k->nohp; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa-solid fa-envelope text-primary"></i></td>
                                <td>
                                    <?php echo $k->email; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="fa-solid fa-location-dot text-primary"></i></td>
                                <td>
                                    <?php echo $k->alamat; ?>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
                <div class="text-center pb-4">
                    <?php foreach ($kontak as $k) { ?>
                        <a href="<?php echo $k->instagram; ?>"><img src="<?php echo base_url() . 'assets/landingpages' ?>/img/instagram.png" class="img-fluid" width="40px" alt=""></a>
                        <a href="<?php echo $k->facebook; ?>"><img src="<?php echo base_url() . 'assets/landingpages' ?>/img/facebook.png" class="img-fluid" width="40px" alt=""></a>
                        <a href="<?php echo $k->twitter; ?>"><img src="<?php echo base_url() . 'assets/landingpages' ?>/img/twitter.png" class="img-fluid" width="40px" alt=""></a>
                        <a href="<?php echo $k->linkedin; ?>"><img src="<?php echo base_url() . 'assets/landingpages' ?>/img/linkedin.png" class="img-fluid" width="40px" alt=""></a>
                    <?php } ?>
                </div>
                <div class="text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6115869853443!2d117.2138874!3d-0.5832681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df42a4977df20a1%3A0xc05a2fa3278d266c!2sOffice%20rievshop_%20Samarinda!5e0!3m2!1sid!2sid!4v1647251308941!5m2!1sid!2sid" width="300" height="200" style="border:10px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-sm-5 pt-4">
                <h2 class="text-center">Contact us</h2>
                <form action="<?php echo base_url('welcome/send_message') ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="nama" class="form-control" placeholder="Name" required>
                        <?php echo form_error('name'); ?>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" required>
                                <?php echo form_error('email'); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                                <?php echo form_error('phone'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Messages</label>
                        <textarea class="form-control" name="messages" rows="3" placeholder="Messages" required></textarea>
                        <?php echo form_error('messages'); ?>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /Contact Us -->
<!-- Content -->
<section id="tentang_kami">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-sm-6">
                <img src="<?php echo base_url() . 'assets/single' ?>/idm.jpg" class="img-fluid" alt="layanan">
            </div>
            <div class="col-sm-6">
                <h3>Internet Desa Mandiri</h3>
                <p>
                    Internet Swajasa yang setia menemani anda dirumah dengan keluarga dan bersama swajasa jaringan stabil, cepat maksimal dan mudah di jangkau
                </p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-sm">
                <h3>PRICING</h3>
            </div>
        </div>

        <div class="row py-4 justify-content-around">
            <div class="col-sm-3 pt-4">
                <div class="text-center">
                    <div class="header mb-4">
                        <h4>Home Internet Plus</h4>
                        <h5 class="fw-normal fst-italic">Rp 395.000 <small>/month</small></h5>
                    </div>
                    <div class="body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Speed Up To 50 Mbps</span></td>
                                </tr>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Support 24 jam</span></td>
                                </tr>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Tidak dibatasi kuota / No FUP</span></td>
                                </tr>
                                <tr>
                                    <td><span class="text-decoration-line-through"><i class="fa-solid fa-xmark text-secondary"></i> Geratis biaya setting</span></td>
                                </tr>
                                <tr>
                                    <td><span class="text-decoration-line-through"><i class="fa-solid fa-xmark text-secondary"></i> Free Registrasi</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php foreach ($kontak as $k) { ?>
                            <a href="https://api.whatsapp.com/send/?phone=<?php echo $k->nowa; ?>&text=Hi+SWAJASA+Lintas+Media,+saya+mau+order+PAKET+HOME+INTERNET+PLUS" class="btn btn-sm"><img src="<?php echo base_url() . 'assets/landingpages' ?>/img/whatsapp.png" class="img-fluid sm" width="30px" alt=""> Order now</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-4">
                <div class="text-center">
                    <div class="header mb-4">
                        <h4>Home Internet Premium</h4>
                        <h5 class="fw-normal fst-italic">Rp 635.000 <small>/month</small></h5>
                    </div>
                    <div class="body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Speed Up To 100 Mbps</span></td>
                                </tr>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Support 24 jam</span></td>
                                </tr>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Tidak dibatasi kuota / No FUP</span></td>
                                </tr>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Geratis biaya setting</span></td>
                                </tr>
                                <tr>
                                    <td><span class="text-decoration-line-through"><i class="fa-solid fa-xmark text-secondary"></i> Free Registrasi</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php foreach ($kontak as $k) { ?>
                            <a href="https://api.whatsapp.com/send/?phone=<?php echo $k->nowa; ?>&text=Hi+SWAJASA+Lintas+Media,+saya+mau+order+PAKET+HOME+INTERNET+PREMIUM" class="btn btn-sm"><img src="<?php echo base_url() . 'assets/landingpages' ?>/img/whatsapp.png" class="img-fluid sm" width="30px" alt=""> Order now</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-4">
                <div class="text-center">
                    <div class="header mb-4">
                        <h4>Bisnis Plan</h4>
                        <h5 class="fw-normal fst-italic">Rp Hubungi Kami <small></small></h5>
                    </div>
                    <div class="body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Kecepatan Mulai Up to 100 Mbps</span></td>
                                </tr>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Support 24 jam</span></td>
                                </tr>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Tidak dibatasi kuota / No FUP</span></td>
                                </tr>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Geratis biaya setting</span></td>
                                </tr>
                                <tr>
                                    <td><span><i class="fa-solid fa-check text-success"></i> Free Registrasi</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php foreach ($kontak as $k) { ?>
                            <a href="https://api.whatsapp.com/send/?phone=<?php echo $k->nowa; ?>&text=Hi+SWAJASA+Lintas+Media,+saya+mau+order+PAKET+BISNIS+PLAN" class="btn btn-sm"><img src="<?php echo base_url() . 'assets/landingpages' ?>/img/whatsapp.png" class="img-fluid sm" width="30px" alt=""> Order now</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Content -->
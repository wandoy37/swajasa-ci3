<!-- Content -->
<section id="tentang_kami">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-sm-6">
                <img src="<?php echo base_url() . 'assets/single' ?>/ph.jpg" class="img-fluid" alt="layanan">
            </div>
            <div class="col-sm-6">
                <h3>Production House Multimedia Creator</h3>
                <p>
                    Kami Profesional, Kreatif & Berpengalaman untuk Produksi Video, Animasi 2D/3D & Produksi Film. Kami melayani segala jenis pembuatan video mulai dari digital sampai video Commerial untuk iklan, Company Profile oleh Team Profesional dan berpengalaman di bidangnya dengan alat terbaik kami
                </p>
                <p>
                    Berkolaborasi dengan Klien Hebat dari Personal, Corporate & Government. Hubungi Kami untuk Konsultasi Gratis!
                </p>
            </div>
        </div>

        <div class="row text-center py-4">
            <div class="col-sm">
                <h3>SERVICE</h3>
            </div>
        </div>

        <div class="row py-4 justify-content-around">
            <div class="col-sm-3 pt-4">
                <div class="text-center">
                    <div class="header mb-4">
                        <img src="<?php echo base_url() . 'assets/single' ?>/3/animate.png" class="img-fluid" width="100px" alt="layanan">
                        <h4 class="py-4">Video & Animation</h4>
                    </div>
                    <div class="body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><span>Animation 2D & 3D</span></td>
                                </tr>
                                <tr>
                                    <td><span>Highlight Video</span></td>
                                </tr>
                                <tr>
                                    <td><span>Video Event</span></td>
                                </tr>
                                <tr>
                                    <td><span>Gathering & Tour Documentary Movie</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php foreach ($kontak as $k) { ?>
                            <a href="https://api.whatsapp.com/send/?phone=<?php echo $k->nowa; ?>&text=Hi+SWAJASA+Lintas+Media,+saya+mau+order+JASA+VIDEO,+dan+ANIMATION" class="btn btn-sm"><img src="<?php echo base_url() . 'assets/landingpages' ?>/img/whatsapp.png" class="img-fluid sm" width="30px" alt=""> Order now</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-4">
                <div class="text-center">
                    <div class="header mb-4">
                        <img src="<?php echo base_url() . 'assets/single' ?>/3/corporation.png" class="img-fluid" width="100px" alt="layanan">
                        <h4 class="py-4">CORPORATE & BUSINESS</h4>
                    </div>
                    <div class="body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><span>Company Video</span></td>
                                </tr>
                                <tr>
                                    <td><span>Company Profile</span></td>
                                </tr>
                                <tr>
                                    <td><span>Presentation Video</span></td>
                                </tr>
                                <tr>
                                    <td><span>Project Presentation</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php foreach ($kontak as $k) { ?>
                            <a href="https://api.whatsapp.com/send/?phone=<?php echo $k->nowa; ?>&text=Hi+SWAJASA+Lintas+Media,+saya+mau+order+JASA+CORPORATE,+dan+BUSINESS" class="btn btn-sm"><img src="<?php echo base_url() . 'assets/landingpages' ?>/img/whatsapp.png" class="img-fluid sm" width="30px" alt=""> Order now</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 pt-4">
                <div class="text-center">
                    <div class="header mb-4">
                        <img src="<?php echo base_url() . 'assets/single' ?>/3/commercial.png" class="img-fluid" width="100px" alt="layanan">
                        <h4 class="py-4">COMMERCIAL & MARKETING VIDEO</h4>
                    </div>
                    <div class="body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><span>Video Advertisement</span></td>
                                </tr>
                                <tr>
                                    <td><span>Social Media Video</span></td>
                                </tr>
                                <tr>
                                    <td><span>Explainer Video Product </span></td>
                                </tr>
                                <tr>
                                    <td><span>Knowledge Video</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php foreach ($kontak as $k) { ?>
                            <a href="https://api.whatsapp.com/send/?phone=<?php echo $k->nowa; ?>&text=Hi+SWAJASA+Lintas+Media,+saya+mau+order+JASA+COMMERCIAL,+dan+MARKETING+VIDEO" class="btn btn-sm"><img src="<?php echo base_url() . 'assets/landingpages' ?>/img/whatsapp.png" class="img-fluid sm" width="30px" alt=""> Order now</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Content -->

<section id="layanan">
    <div class="container text-white pb-4">
        <div class="row align-items-center justify-content-center">
            <div class="col-sm-6">
                <h3>Apa fungsi Video Marketing bagi Bisnis?</h3>
                <p>Melalui video, materi promosi bisa dijelaskan secara menarik dan lebih mendetail sehingga mudah dipahami oleh penonton (pelanggan).</p>
            </div>
            <div class="col-sm-4">
                <table class="table">
                    <tbody class="text-white">
                        <tr>
                            <td><span><i class="fa-solid fa-check"></i> Visualisasi produk lebih interaktif.</span></td>
                        </tr>
                        <tr>
                            <td><span><i class="fa-solid fa-check"></i> Lebih komunikatif & profesional.</span></td>
                        </tr>
                        <tr>
                            <td><span><i class="fa-solid fa-check"></i> Meningkatkan brand value.</span></td>
                        </tr>
                        <tr>
                            <td><span><i class="fa-solid fa-check"></i> Materi promosi dapat dimengerti lebih mudah.</span></td>
                        </tr>
                        <tr>
                            <td><span><i class="fa-solid fa-check"></i> Visualisasi produk lebih interaktif.</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- /Layanan -->
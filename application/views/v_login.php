<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login | Swajasa</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?php base_url(); ?>assets/img/icon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="<?php base_url(); ?>assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?php base_url(); ?>assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php base_url(); ?>assets/css/atlantis.css">
</head>

<body class="login">
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn">
            <div class="row text-center mb-2">
                <div class="col-sm">
                    <img src="<?php echo base_url(); ?>assets/img/icon-a.png" class="img-fluid " width="100px" alt="">
                </div>
            </div>

            <h3 class="text-center">Sign In To Admin</h3>

            <?php
            if (isset($_GET['alert'])) {
                if ($_GET['alert'] == "gagal") {
                    echo "<div class='alert alert-danger font-weight-bold rounded'>Maaf! Username & Password Salah.</div>";
                } else if ($_GET['alert'] == "belum_login") {
                    echo "<div class='alert alert-danger font-weight-bold rounded'>Anda Harus Login Terlebih Dulu!</div>";
                } else if ($_GET['alert'] == "logout") {
                    echo "<div class='alert alert-success font-weight-bold rounded'>Anda Telah Logout!</div>";
                }
            }
            ?>

            <form action="<?php echo base_url() . 'login/aksi' ?>" method="post">
                <div class="login-form">
                    <div class="form-group form-floating-label">
                        <input id="username" name="username" type="text" class="form-control input-border-bottom" required>
                        <label for="username" class="placeholder">Username</label>
                        <?php echo form_error('username'); ?>
                    </div>

                    <div class="form-group form-floating-label">
                        <input id="password" name="password" type="password" class="form-control input-border-bottom" required>
                        <label for="password" class="placeholder">Password</label>
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                        <?php echo form_error('password'); ?>
                    </div>

                    <div class="row form-sub m-0">
                        <a href="https://api.whatsapp.com/send/?phone=6282148722747&text=Hi,%20saya+*SWAJASA+Lintas+Media*+lupa+password!" class="link float-right">Lupa Password ?</a>
                    </div>
                    <div class="form-action mb-3">
                        <button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
                    </div>
                    <div class="login-account">
                        <a href="<?php echo base_url() . '' ?>" class="link">Back To Home</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="<?php base_url(); ?>assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?php base_url(); ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?php base_url(); ?>assets/js/core/popper.min.js"></script>
    <script src="<?php base_url(); ?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?php base_url(); ?>assets/js/atlantis.min.js"></script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(300, 0).slideUp(300, function() {
                $(this).remove();
            });
        }, 3000);
    </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MHS Amikom Yogyakarta</title>
        <link rel='shortcut icon'
            href='https://amikom.ac.id/theme/material/img/amikom_icon_pack/favicon-16x16.png'
            type='image/x-icon' />
        <link
            href="https://amikom.ac.id/theme/material/vendors/bower_components/animate.css/animate.min.css"
            rel="stylesheet">
        <link
            href="https://amikom.ac.id/theme/material/vendors/bower_components/sweetalert/dist/sweetalert.css"
            rel="stylesheet">
        <link
            href="https://amikom.ac.id/theme/material/vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css"
            rel="stylesheet">
        <link
            href="https://amikom.ac.id/theme/material/vendors/bower_components/font-awesome/css/font-awesome.min.css"
            rel="stylesheet">
        <link
            href="https://amikom.ac.id/theme/material/vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css"
            rel="stylesheet">
        <link
            href="https://amikom.ac.id/theme/material/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url('assets/')?>css/auth.css">
    </head>
    <body>
        <div class="container">
            <div class="login-content">
                <!-- Login -->
                <div class="lc-block toggled" id="l-login">
                    <div class="lcb-form lcb-form-header">
                        <center>
                            <h2><img
                                    src="https://amikom.ac.id/theme/material/custom/images/logos/icon_text/icontext_amikom_100p.png"
                                    alt></h2>
                        </center>
                        <center>
                            <small class="text-npm p-b-10">Silahkan Login dengan
                                NPM dan Password
                                AMIKOM anda</small>
                        </center>
                        <hr>
                    </div>
                    <div class="lcb-form p-t-0">
                    <?= $this->session->flashdata('message'); ?>
                        <form action="<?= base_url('Auth')?>" method="post" accept-charset="utf-8">
                            <input type="hidden" name="nim"
                                value="e67c2d2026fb59e77fff5664f6be268d" />
                            <div class="input-icon m-b-20">
                                <span class="input-icon"><i
                                        class="icon fa-solid fa-user"></i></span>
                                <div class="fg-line">
                                    <input type="text" name="nim"
                                        class="form-control"
                                        placeholder="NPM/NIM AMIKOM">
                                </div>
                            </div>
                            <div class="input-icon m-b-20">
                                <span class="input-icon"><i
                                        class="icon fa-solid fa-key"></i></span>
                                <div class="fg-line">
                                    <input type="password" name="password"
                                        class="form-control"
                                        placeholder="Password">
                                </div>
                            </div>
                            <div class="input-icon m-b-20">
                                <span class="input-icon"></span>
                                <div class="fg-line">
                                    <div class="g-recaptcha"
                                        data-sitekey="6LeZ8A8UAAAAAFveA2IdqSqGKy8617HV8J_7olgK"></div>
                                </div>
                            </div>
                            <div class="login">
                                <button type="submit" class=" btn-warning btn-submit btn-position"><i
                                    class="zmdi zmdi-arrow-forward"></i></button>
                        </form>
                    </div>
                    </div>
                        <div class="lcb-navigation zmdi-format-align-center">
                            <button id="oauth_login" type="submit" class="btn bgm-orange waves-effect btn-acc"
                                data-ma-block="#l-forget-password"><i
                                    class="zmdi zmdi-google"></i> <span>Amikom
                                    Google
                                    Account</span>
                                </button>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>
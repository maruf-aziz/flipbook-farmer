<!doctype html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

    <!-- viewport -->
    <meta content="width=device-width,initial-scale=1" name="viewport">

    <!-- icon -->
    <link rel="icon" type="image/png" href="logo/logo.png" />

    <!-- title -->
    <title>FlipBook | Menuju Kesuksesan</title>

    <!-- add css and js for flipbook -->
    <link type="text/css" href="css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Play:400,700">
    <script src="js/jquery.js"></script>
    <script src="js/turn.js"></script>
    <script src="js/jquery.fullscreen.js"></script>
    <script src="js/jquery.address-1.6.min.js"></script>
    <script src="js/wait.js"></script>
    <script src="js/onload.js"></script>
    <script src="https://use.fontawesome.com/234de3ad9b.js"></script>


    <!-- style css  -->
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            overflow: auto !important;
        }
    </style>

</head>

<body id="bag">


    <!-- BEGIN FLIPBOOK STRUCTURE -->
    <div id="fb5-ajax">

        <!-- BEGIN HTML BOOK -->
        <div data-current="book5" class="fb5" id="fb5">

            <!-- PRELOADER -->
            <div class="fb5-preloader">
                <div id="wBall_1" class="wBall">
                    <div class="wInnerBall">
                    </div>
                </div>
                <div id="wBall_2" class="wBall">
                    <div class="wInnerBall">
                    </div>
                </div>
                <div id="wBall_3" class="wBall">
                    <div class="wInnerBall">
                    </div>
                </div>
                <div id="wBall_4" class="wBall">
                    <div class="wInnerBall">
                    </div>
                </div>
                <div id="wBall_5" class="wBall">
                    <div class="wInnerBall">
                    </div>
                </div>
            </div>

            <!-- BACK BUTTON -->
            <!-- <button onclick="getUrl()" type="button">Play Audio</button> -->

            <!-- BACKGROUND FOR BOOK -->
            <div class="fb5-bcg-book"></div>

            <!-- BEGIN CONTAINER BOOK -->
            <div id="fb5-container-book">

                <!-- BEGIN deep linking -->
                <section id="fb5-deeplinking">
                    <ul>
                        <li data-address="0" data-page="1"></li>

                        <?php

                        $page = 40;
                        $count = $page * 2;

                        for ($i = 0; $i < $count; $i++) {
                        ?>

                            <li data-address="<?= floor(($i + 2) / 2) ?>" data-page="<?= $i + 2; ?>"></li>

                        <?php
                        }
                        ?>

                        <li data-address="end" data-page="<?= $count + 2; ?>"></li>
                    </ul>
                </section>
                <!-- END deep linking -->


                <!-- BEGIN ABOUT -->
                <section id="fb5-about">
                    <h3>PETUNJUK PENGGUNAAN</h3>
                    <h3>1. Baca dan dengarkan cerita dengan seksama</h3>
                    <h3>2. Tekan tanda <i class="fa fa-arrow-right"></i> untuk membuka halaman berikutnya</h3>
                    <h3>3. Tekan tanda <i class="fa fa-arrow-left"></i> untuk membuka halaman sebelumnya</h3>
                    <h3>4. Tekan tanda <i class="fa fa-search-plus"></i> untuk memperbesar kedalam tampilan</h3>
                    <h3>5. Tekan tanda <i class="fa fa-search-minus"></i> untuk memperbesar keluar tampilan</h3>
                    <h3>6. Tekan tanda <i class="fa fa-th"></i> untuk menampilkan semua halaman</h3>
                    <h3>7. Tekan tanda <i class="fa fa-volume-up"></i> untuk menampilkan bunyi</h3>
                    <h3>8. Tekan tanda <i class="fa fa-home"></i> untuk membuka kembali ke halaman awal</h3>
                    <h3>9. Pahami ceirta di setiap halaman</h3>
                    <h3>10. Setelah itu kerjakan lembar evaluasi yang terdapat dalam buku cerita</h3>
                </section>
                <!-- END ABOUT -->


                <!-- BEGIN BOOK -->
                <div id="fb5-book">


                    <!-- BEGIN PAGE 1-->
                    <div data-background-image="" class="">

                        <!-- begin container page book -->
                        <div class="fb5-cont-page-book">

                            <!-- description for page  -->
                            <div class="fb5-page-book">
                                <div id="fb5-cover">
                                    <ul>
                                        <li>
                                            <a href="#"><img data-src="pages/1-min.jpg"></a>
                                        </li>
                                        <li>
                                            <a href="#"><img data-src="pages/15-min.jpg"></a>
                                        </li>
                                        <li>
                                            <a href=""><img data-src="pages/26-min.jpg"></a>
                                        </li>
                                    </ul>
                                    <img data-src="logo/logo3.png" id="fb5-logo-cover">
                                </div>
                            </div>
                            <!-- end description for page  -->

                            <!-- number page and title -->
                            <div class="fb5-meta">
                                <span class="fb5-description"></span>
                                <span class="fb5-num"></span>
                            </div>
                            <!-- end number page and title  -->
                        </div>
                        <!-- end container page book -->

                    </div>
                    <!-- END PAGE 1 -->


                    <?php

                    for ($i = 0; $i < $page; $i++) {

                        if ($i + 1 == 11 || $i + 1 == 13 || $i + 1 == 14 || $i + 1 == 15 || $i + 1 == 16 || $i + 1 == 20 || $i + 1 == 21 || $i + 1 == 22 || $i + 1 == 23 || $i + 1 == 27 || $i + 1 == 28 || $i + 1 == 29 || $i + 1 == 30 || $i + 1 == 31 || $i + 1 == 32 || $i + 1 == 33 || $i + 1 == 35) {
                    ?>
                            <!-- BEGIN PAGE -->
                            <div data-background-image="pages/gif/<?= $i + 1; ?>.gif" class="fb5-double fb5-first">

                                <!-- container page book -->
                                <div class="fb5-cont-page-book">

                                    <!-- description for page from  -->
                                    <div class="fb5-page-book">

                                    </div>

                                </div>
                                <!-- end container page book -->

                            </div>
                            <!-- END PAGE  -->



                            <!-- BEGIN PAGE -->
                            <div data-background-image="pages/gif/<?= $i + 1; ?>.gif" class="fb5-double fb5-second">

                                <!-- container page book -->
                                <div class="fb5-cont-page-book">

                                    <!-- description for page from  -->
                                    <div class="fb5-page-book">

                                    </div>

                                </div>
                                <!-- end container page book -->

                            </div>
                            <!-- END PAGE -->
                        <?php
                        } else {
                        ?>
                            <!-- BEGIN PAGE -->
                            <div data-background-image="pages/<?= $i + 1; ?>-min.jpg" class="fb5-double fb5-first">

                                <!-- container page book -->
                                <div class="fb5-cont-page-book">

                                    <!-- description for page from  -->
                                    <div class="fb5-page-book">

                                    </div>

                                </div>
                                <!-- end container page book -->

                            </div>
                            <!-- END PAGE  -->



                            <!-- BEGIN PAGE -->
                            <div data-background-image="pages/<?= $i + 1; ?>-min.jpg" class="fb5-double fb5-second">

                                <!-- container page book -->
                                <div class="fb5-cont-page-book">

                                    <!-- description for page from  -->
                                    <div class="fb5-page-book">

                                    </div>

                                </div>
                                <!-- end container page book -->

                            </div>
                            <!-- END PAGE -->
                    <?php
                        }
                    }

                    ?>


                    <!-- BEGIN PAGE END -->
                    <div data-background-image="pages/12.jpg" class="">

                        <!-- container page book -->
                        <div class="fb5-cont-page-book">

                            <!-- description for page from  -->
                            <div class="fb5-page-book">

                            </div>

                            <!-- number page and title for page -->
                            <div class="fb5-meta">
                                <span class="fb5-num"></span>
                                <span class="fb5-description"></span>
                            </div>

                        </div>

                    </div>
                    <!-- END PAGE END -->


                </div>
                <!-- END BOOK -->


                <!-- arrows -->
                <a class="fb5-nav-arrow prev" onclick="getUrlBack()"></a>
                <a class="fb5-nav-arrow next" onclick="getUrlNext()"></a>


            </div>
            <!-- END CONTAINER BOOK -->

            <!-- BEGIN FOOTER -->
            <div id="fb5-footer">

                <div class="fb5-bcg-tools"></div>

                <a id="fb5-logo" target="_blank" href="#">
                    <img alt="" src="logo/logo_.png" width="50">
                </a>

                <div class="fb5-menu" id="fb5-center">
                    <ul>

                        <!-- icon download -->
                        <!-- <li>
                            <a title="DOWNLOAD (ZIP)  " class="fb5-download" href="img/file.pdf"></a>
                        </li> -->


                        <!-- icon_zoom_in -->
                        <li>
                            <a title="ZOOM IN" class="fb5-zoom-in"></a>
                        </li>

                        <!-- icon_zoom_out -->

                        <li>
                            <a title="ZOOM OUT " class="fb5-zoom-out"></a>
                        </li>

                        <!-- icon_zoom_auto -->
                        <!-- <li>
                            <a title="ZOOM AUTO " class="fb5-zoom-auto"></a>
                        </li> -->

                        <!-- icon_zoom_original -->
                        <!-- <li>
                            <a title="ZOOM ORIGINAL (SCALE 1:1)" class="fb5-zoom-original"></a>
                        </li> -->


                        <!-- icon_allpages -->
                        <li>
                            <a title="SHOW ALL PAGES " class="fb5-show-all"></a>
                        </li>

                        <!-- icon_playaudio -->
                        <li>
                            <a title="PLAY AUDIO " onclick="getUrl()">
                                <i class="fa fa-volume-up" style="color: gray;"></i>
                            </a>
                        </li>


                        <!-- icon_home -->
                        <li>
                            <a title="SHOW HOME PAGE " class="fb5-home"></a>
                        </li>

                    </ul>
                </div>

                <div class="fb5-menu" id="fb5-right">
                    <ul>
                        <!-- icon page manager -->
                        <!-- <li class="fb5-goto">
                            <label for="fb5-page-number" id="fb5-label-page-number">PAGE</label>
                            <input type="text" id="fb5-page-number">
                            <button type="button">GO</button>
                        </li> -->

                        <!-- icon fullscreen -->
                        <li>
                            <a title="FULL / NORMAL SCREEN" class="fb5-fullscreen"></a>
                        </li>

                    </ul>
                </div>



            </div>
            <!-- END FOOTER -->


            <!-- BEGIN ALL PAGES -->
            <div id="fb5-all-pages" class="fb5-overlay">

                <section class="fb5-container-pages">

                    <div id="fb5-menu-holder">

                        <ul id="fb5-slider">

                            <li class="1">
                                <img alt="" data-src="pages/thumbs/1_.jpg">
                            </li>

                            <?php

                            $thumbs = 0;

                            for ($i = 0; $i < $page; $i++) {
                                $thumbs = $thumbs + 2;
                            ?>

                                <li class="<?= $thumbs; ?>">
                                    <img alt="" data-src="pages/thumbs/<?= $i + 1; ?>_-min.jpg">
                                </li>

                            <?php
                            }

                            ?>

                            <li class="<?= $count + 2; ?>">
                                <img alt="" data-src="pages/thumbs/12_.jpg">
                            </li>

                        </ul>

                    </div>

                </section>

            </div>
            <!-- END ALL PAGES -->

        </div>
        <!-- END HTML BOOK -->

    </div>
    <!-- END FLIPBOOK STRUCTURE -->

    <!-- CONFIGURATION FLIPBOOK -->
    <script>
        jQuery('#fb5').data('config', {
            "page_width": "550",
            "page_height": "715",
            "email_form": "office@somedomain.com",
            "zoom_double_click": "1",
            "zoom_step": "0.06",
            "double_click_enabled": "true",
            "tooltip_visible": "true",
            "toolbar_visible": "true",
            "gotopage_width": "30",
            "deeplinking_enabled": "true",
            "rtl": "false",
            'full_area': 'true',
            'lazy_loading_thumbs': 'false',
            'lazy_loading_pages': 'false'
        })
    </script>

    <!-- CONFIGURATION GET URL TO PLAY AUDIO -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.1/howler.min.js"></script>
    <script type="text/javascript">
        var sound;

        $(document).ready(function() {
            var url = window.location.href;

            var arr = url.split("/");

            sound = new Howl({
                src: ['audio/cover.m4a'],
                volume: 0.0,
            });
            sound.play()
        })

        function getUrl(parameter = null) {
            var url = window.location.href;

            var arr = url.split("/");

            audioPause.call();

            // console.log(arr[5]);

            if (arr[arr.length - 1] == '1') {
                sound = new Howl({
                    src: ['audio/cover.m4a'],
                    volume: 1.0,
                });
                sound.play()
                // sound.pause()
            } else {
                for (let index = 9; index <= 34; index++) {
                    if (parseInt(arr[arr.length - 1]) == index) {
                        sound = new Howl({
                            src: ['audio/' + (index - 8) + '.m4a'],
                            volume: 1.0,
                        });
                        sound.play()
                    }
                }
            }

        }

        function getUrlNext() {
            var url = window.location.href;

            var arr = url.split("/");

            audioPause.call();

            // console.log(arr[5]);

            if (arr[arr.length - 1] == '0') {
                sound = new Howl({
                    src: ['audio/cover.m4a'],
                    volume: 1.0,
                });
                sound.play()
                // sound.pause()
            } else {
                for (let index = 9; index <= 34; index++) {
                    if (parseInt(arr[arr.length - 1]) == index - 1) {
                        sound = new Howl({
                            src: ['audio/' + (index - 8) + '.m4a'],
                            volume: 1.0,
                        });
                        sound.play()
                    }
                }
            }

        }

        function getUrlBack() {
            var url = window.location.href;

            var arr = url.split("/");

            audioPause.call();

            // console.log(arr[5]);

            if (arr[arr.length - 1] == '2') {
                sound = new Howl({
                    src: ['audio/cover.m4a'],
                    volume: 1.0,
                });
                sound.play()
                // sound.pause()
            } else {
                for (let index = 9; index <= 34; index++) {
                    if (parseInt(arr[arr.length - 1]) == index + 1) {
                        sound = new Howl({
                            src: ['audio/' + (index - 8) + '.m4a'],
                            volume: 1.0,
                        });
                        sound.play()
                    }
                }
            }

        }

        function audioPause() {
            sound.pause()
        }
    </script>
</body>

</html>
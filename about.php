<?php include 'header.php'; ?>

<body>

    <?php include 'navigation.php'; ?>

    <!-- Banner -->
    <section id="banner-about">
        <div class="container-fluid p-0">
            <div class="banner-hero banner-hero-about d-flex justify-content-center align-items-center" style="background: url('assets/img/background/bg-about.png'); width:100%; background-size:cover; background-repeat:no-repeat;">
                <h1>Why We Dew<br>What We Dew</h1>
            </div>
        </div>
    </section>
    <!-- End Of Banner -->

    <!-- First Content -->
    <section id="first-content-about">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 left-first-content-about d-flex align-self-end">
                    <h1>Believe In <br>Your Glow.</h1>
                    <p><span>Yes, everyone has their own special glow</span></p>
                    <p>
                        Busy days, long nights, constant multitasking…we get it. You work this hard, you balance life the best that you can but still can’t find the time to care for yourself.
                    </p>
                    <p>
                        Whether you’re a mom, corporate powerhouse, blogger or even currently on a sabbatical from life - we are here to support you. Because we truly believe there’s an inspiring glow around the determined woman. 
                    </p>
                    <p>
                        Simplicity guides our girl and a healthy well-balanced life is her ultimate goal.
                    </p>
                    <div class="main-button">
                        <a href="#" class="button-about-second-content"> <span>Shop It</span> <img src="assets/img/icon/icon-arrow-next-18px.svg" alt="" class="img-fluid arrow-button-black"></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 right-first-content-about text-center">
                    <h1>“ Your Skin Is Your Best Accessory. Take Good Care Of It.”</h1>
                    <div class="image-first-content-about">
                        <img src="assets/img/img-component/img-home-2.png" alt="" class="img-fluid first-image-content-about">
                    </div>
                    <div class="orange-component-about">
                        <img src="assets/img/img-component/buble-orange.svg" alt="" class="img-fluid vector-orange-about">
                    </div>
                    <div class="vector-image-about-1">
                        <img src="assets/img/icon/vector-image-intro-2.svg" alt="" class="img-fluid vector-about-1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of First Content -->

    <!-- Second Content -->
    <section id="second-content-about">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-6 col-md-4 d-flex align-items-center left-second-content-about-2">
                    <div class="vector-bubble-orange-second-about"></div>
                    <div class="row left-img-second-content-about">
                        <div class="col-12 col-md-12 about-left-image-1">
                            <img src="assets/img/img-component/img-about-1.png" alt="" class="img-fluid img-about-1">
                        </div>
                        <div class="col-12 col-md-12 about-left-image-2">
                            <div class="vector-dots-second-about"></div>
                            <img src="assets/img/img-component/img-about-2.png" alt="" class="img-fluid img-about-2">
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="center-img-second-content-about">
                        <h1>Get Inspired<br> by our Dewy<br> Women.</h1>
                        <div class="about-left-image-3">
                            <img src="assets/img/img-component/img-about-3.png" alt="" class="img-fluid img-about-3">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="right-img-second-content-about">
                        <div class="vector-bubble-blue-second-about"></div>
                        <div class="slider-second-content-about">
                            <div class="slick-content-images-about">
                                <div class="slider-slick-about">
                                    <img src="assets/img/img-component/img-about-4.png" alt="" class="img-fluid slider-img">
                                </div>
                                <div class="slider-slick-about">
                                    <img src="assets/img/img-component/img-about-5.png" alt="" class="img-fluid slider-img">
                                </div>
                                <div class="slider-slick-about">
                                    <img src="assets/img/img-component/img-about-4.png" alt="" class="img-fluid slider-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Second Content -->


    <?php include 'footer.php'; ?>

    <!-- Internal JS -->

    <script type="text/javascript">
        $('.slick-content-images-about').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: false,
            prevArrow: "<button class='arrowLeftAbout'><img src='assets/img/icon/arrow-left-slider.svg' class='img-fluid'></button>",
            nextArrow: "<button class='arrowRightAbout'><img src='assets/img/icon/arrow-right-slider.svg' class='img-fluid'></button>"
        });
    </script>
</body>

</html>
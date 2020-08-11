<?php include 'header.php'; ?>

<body>

    <?php include 'navigation.php'; ?>

    <style type="text/css">
        #modal-bootstrap.press-detail .component-1 {
            /*content: */
        }

        #location-slider {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 0px;
        }

        #location-slider .box-content {
            /*width: 100%;*/
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        #location-slider .box-content p {
            margin: 0 10px;
            font-weight: 700;
            text-transform: uppercase;
        }

        #slider-travel {
            display: block;
        }

        #slider-travel-slick {
            display: none;
        }

        #slider-travel .slider .slider__inner .slider__item-img {
            height: unset !important;
            width: 100%;
        }

        .slider .slider__inner .slider__item {
            width: 250px;
        }

        .slider .slider__inner .slider__item-first {
            left: 20%;
        }

        .slider .slider__inner .slider__item-previous {
            left: 32.5%;
        }

        .slider .slider__inner .slider__item-next {
            left: 67.5%;
        }

        .slider .slider__inner .slider__item-last {
            left: 82.5%;
        }

        #slider-travel .slider .slider__inner .slider__item-previous, #slider-travel .slider .slider__inner .slider__item-next {
            width: 300px;
        }

        #slider-travel .slider .slider__inner .slider__item-selected {
            width: 400px;
        }

        #press-release #slider-travel .arrowLeftTravel {
            left: -50%;
        }

        #press-release #slider-travel .arrowLeftTravel img {
            width: 75%;
        }

        #press-release #slider-travel .arrowRightTravel {
            right: -50%;
        }

        #press-release #slider-travel .arrowRightTravel img {
            width: 75%;
        }

        @media screen and ( min-width: 1600px ) {
            #press-release .component-1 {
                width: 500px;
                height: 300px;
            }

            #press-release .component-2 {
                width: 150px;
                height: 150px;
            }

            #press-release .component-3 {
                width: 450px;
                height: 250px;
            }

            #press-release .component-4 {
                width: 100px;
                height: 100px;
            }

            #press-release .component-5 {
                width: 500px;
                height: 300px;
            }

            #press-release .component-6 {
                width: 600px;
                height: 400px;
            }

            .slider .slider__inner .slider__item {
                width: 300px;
            }

            #slider-travel .slider .slider__inner .slider__item-previous, #slider-travel .slider .slider__inner .slider__item-next {
                width: 350px;
            }

            #slider-travel .slider .slider__inner .slider__item-selected {
                width: 450px;
            }
        }

        @media screen and ( min-width: 768px ) and ( max-width: 998px ) {
            #slider-travel .slider .slider__inner .slider__item {
                width: 200px;
            }

            #slider-travel .slider .slider__inner .slider__item-previous, #slider-travel .slider .slider__inner .slider__item-next {
                width: 250px;
            }

            #slider-travel .slider .slider__inner .slider__item-selected {
                width: 350px;
            }

            #slider-travel .slider .slider__inner .slider__item {
                width: 150px;
            }

            #slider-travel .slider .slider__inner .slider__item-previous, #slider-travel .slider .slider__inner .slider__item-next {
                width: 200px;
            }

            #slider-travel .slider .slider__inner .slider__item-selected {
                width: 300px;
            }

            #press-release .component-5 {
                width: 350px;
                height: 150px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100% 100%;
                position: absolute;
                bottom: 200px;
                left: -25px;
            }

            #press-release .component-6 {
                width: 450px;
                height: 250px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: 100% 100%;
                position: absolute;
                bottom: 100px;
                right: -200px;
            }

            #press-release .title-content {
                padding-top: 75px;
            }
        }
    </style>

    <!-- Banner -->
    <section id="banner-contact-us">
        <div class="container-fluid p-0">
            <div class="banner-hero-contact-us d-flex justify-content-center align-items-center" style="background: url('assets/img/background/bg-press-release.jpg'); width:100%; background-size:cover; background-repeat:no-repeat;">
                <h1>Everything & Everywhere <br> We Dew</h1>
            </div>
        </div>
    </section>
    <!-- End Of Banner -->

    <section id="press-release">
        <div class="container-fluid">
            <div class="component-1"></div>
            <div class="row">
                <div class="component-2"></div>

                <div class="col-md-12 title-content">
                    <h1>#LadiesOfDewIt</h1>
                </div>

                <div class="col-md-12" id="slider-lod">
                    <div class="item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <img src="assets/img/press-release/img-1.jpg">
                    </div>
                    <div class="item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <img src="assets/img/press-release/img-2.jpg">
                    </div>
                    <div class="item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <img src="assets/img/press-release/img-3.jpg">
                    </div>
                    <div class="item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <img src="assets/img/press-release/img-1.jpg">
                    </div>
                    <div class="item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <img src="assets/img/press-release/img-2.jpg">
                    </div>
                    <div class="item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <img src="assets/img/press-release/img-3.jpg">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="component-3"></div>
                <div class="component-4"></div>

                <div class="col-md-12 title-content">
                    <h1>Press</h1>
                </div>

                <div class="col-md-12" id="slider-press">
                    <div class="item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <div class="book-box">
                            <img src="assets/img/press-release/img-press-1.png">    
                        </div>
                    </div>
                    <div class="item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <div class="book-box">
                            <img src="assets/img/press-release/img-press-2.png">    
                        </div>
                    </div>
                    <div class="item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <div class="book-box">
                            <img src="assets/img/press-release/img-press-1.png">    
                        </div>
                    </div>
                    <div class="item" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <div class="book-box">
                            <img src="assets/img/press-release/img-press-1.png">    
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="component-5"></div>
                <div class="component-6"></div>

                <div class="col-md-12 title-content">
                    <h1>#DewItTravels</h1>
                </div>

                <div class="col-md-12" id="slider-travel">
                    <div class="slider">
                      <div class="slider__inner">
                        <div class="slider__item">
                         <div class="slider__item-container">
                            <img src="assets/img/press-release/img-travel-1.jpg" class="slider__item-img"/>
                          </div>
                        </div>
                        <div class="slider__item">
                          <div class="slider__item-container">
                            <img src="assets/img/press-release/img-travel-2.jpg" class="slider__item-img"/>
                          </div>
                        </div>
                        <div class="slider__item">
                         <div class="slider__item-container">
                            <img src="assets/img/press-release/img-travel-3.jpg" class="slider__item-img"/>
                          </div>
                        </div>
                        <div class="slider__item">
                          <div class="slider__item-container">
                            <img src="assets/img/press-release/img-travel-4.jpg" class="slider__item-img"/>
                          </div>
                        </div>
                        <div class="slider__item">
                          <div class="slider__item-container">
                            <img src="assets/img/press-release/img-travel-5.jpg" class="slider__item-img"/>
                          </div>
                        </div>
                        <div class="slider__controls"></div>
                      </div>
                    </div>
                </div>

                <div class="col-md-12" id="slider-travel-slick">
                    <div class="item">
                        <img src="assets/img/press-release/img-travel-1.jpg">
                    </div>
                    <div class="item">
                        <img src="assets/img/press-release/img-travel-1.jpg">
                    </div>
                    <div class="item">
                        <img src="assets/img/press-release/img-travel-1.jpg">
                    </div>
                </div>

                <div class="col-md-12" id="location-slider">
                    <div class="box-content">
                        <span>
                            <img src="assets/img/icon/icon-location.svg">
                        </span>
                        <p>
                            <span>Madrid,</span>
                            <span>Spain</span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="component-bottom"></div>
        </div>
    </section>

    <style type="text/css">
        #modal-bootstrap.press-detail .modal-dialog {
            max-width: 85%;
        }

        #modal-bootstrap.press-detail .date-box {
            padding-top: 25px;
            color: #FFBE9E;
            position: relative;
        }

        #modal-bootstrap.press-detail .date-box:before {
            content: '';
            width: 75px;
            height: 75px;
            /*background-color: #000;*/
            background-image: url('assets/img/press-release/press-release-component-four.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            position: absolute;
            left: -75px;
        }

        #modal-bootstrap.press-detail .image-box {
            position: relative;
        }

        #modal-bootstrap.press-detail .image-box:before {
            content: '';
            width: 125px;
            height: 125px;
            /*background-color: #000;*/
            background-image: url('assets/img/press-release/component-press-detail-2.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            position: absolute;
            right: -100px;
            top: 100px;
            z-index: 10;
        }

        /* assets/img/press-release/component-press-detail-2.svg */

        #modal-bootstrap.press-detail .title-content {
            padding-top: 25px;
        }

        #modal-bootstrap.press-detail .image-box img {
            width: 100%;
            margin: 5px 0;
        }

        #modal-bootstrap.press-detail .image-box .images-wrapper {
            padding: 25px 0;
            position: relative;
        }

        #modal-bootstrap.press-detail .image-box .images-wrapper:before {
            content: '';
            width: 35%;
            height: 50%;
            /*background-color: #000;*/
            background-image: url('assets/img/press-release/press-release-component-three.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            position: absolute;
            bottom: 0;
            right: 0;
            transform: rotate(180deg);
        }

        #modal-bootstrap.press-detail .image-box .images {
            padding-left: 10px;
            padding-right: 10px;
        }
    </style>

    <section id="modal-bootstrap" class="press-detail">
        <div class="container-fluid">
            <div class="row">
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color: rgba(167,208,230,0.5); padding-top: 100px;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="component-1"></div>
                      <!-- <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div> -->
                      <div class="modal-body">
                        <div class="row">
                            <div class="component-modal-1"></div>
                            <div class="col-md-12">
                                <div class="col-md-12 date-box">
                                    <span><img src="assets/img/press-release/icon-calendar.svg"></span>
                                    <span>27 August 2020</span>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="outline: none;">
                                      <span aria-hidden="true" style="color: #A7D0E6; font-size: 40px; font-weight: 400;">&times;</span>
                                    </button>
                                </div>
                                <div class="col-md-12 title-content">
                                    <span>In the News</span>
                                </div>
                                <div class="col-md-12 image-box">
                                    <div class="row images-wrapper">
                                        <div class="col-md-3 images">
                                            <img src="assets/img/press-release/img-travel-2.jpg">
                                            <img src="assets/img/press-release/img-travel-1.jpg">
                                        </div>
                                        <div class="col-md-3 images">
                                            <img src="assets/img/img-component/img-about-3.png" style="height: 95%;">
                                        </div>
                                        <div class="col-md-3 images">
                                            <img src="assets/img/press-release/img-travel-4.jpg">
                                            <img src="assets/img/press-release/img-travel-5.jpg">
                                        </div>
                                        <div class="col-md-3 images">
                                            <img src="assets/img/press-release/img-travel-3.jpg">
                                            <img src="assets/img/press-release/img-travel-1.jpg">
                                        </div>
                                    </div>
                                </div>
                                <!-- <img src="assets/img/press-release/img-travel-5.jpg"> -->
                            </div>
                        </div>
                      </div>
                      <!-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div> -->
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    <script type="text/javascript" src="assets/vendors/slider-overflow/Carousel.js"></script>
    
    <script type="text/javascript">
        const myCarousel = new Carousel({
            container: document.querySelector('.slider'),
            items: document.querySelectorAll('.slider__item'),
            displayControls: true,
            controlsContainer: document.querySelector('.slider__controls'),
            textControls: [
                "<button class='arrowLeftTravel'><img src='assets/img/icon/arrow-left-slider.svg' class='img-fluid'></button>",
                "<button class='arrowRightTravel'><img src='assets/img/icon/arrow-right-slider.svg' class='img-fluid'></button>"
            ],
            // autoplay: false,
            // autoplayTime: 3500
        }); 
    </script>

    <!-- Internal JS -->
    <script type="text/javascript">
        $('#slider-lod').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            prevArrow: "<button class='arrowLeft'><img src='assets/img/icon/arrow-left-slider.svg' class='img-fluid'></button>",
            nextArrow: "<button class='arrowRight'><img src='assets/img/icon/arrow-right-slider.svg' class='img-fluid'></button>",
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        infinite: true,
                    }
                }
            ]
        });

        $('#slider-press').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: "<button class='arrowLeft'><img src='assets/img/icon/arrow-left-slider.svg' class='img-fluid'></button>",
            nextArrow: "<button class='arrowRight'><img src='assets/img/icon/arrow-right-slider.svg' class='img-fluid'></button>",
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        infinite: true,
                    }
                }
            ]
        });

        $('#slider-travel-slick').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: "<button class='arrowLeft'><img src='assets/img/icon/arrow-left-slider.svg' class='img-fluid'></button>",
            nextArrow: "<button class='arrowRight'><img src='assets/img/icon/arrow-right-slider.svg' class='img-fluid'></button>",
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1,
                        infinite: true,
                    }
                }
            ]
        });

        // $('#slider-travel').slick({
        //     infinite: true,
        //     slidesToShow: 3,
        //     slidesToScroll: 1,
        //     centerMode: true,
        //     centerPadding: '50px',
        //     prevArrow: "<button class='arrowLeft'><img src='assets/img/icon/arrow-left-slider.svg' class='img-fluid'></button>",
        //     nextArrow: "<button class='arrowRight'><img src='assets/img/icon/arrow-right-slider.svg' class='img-fluid'></button>"
        // });

        $('#press-release .container-fluid').css('paddingBottom', '100px');

        if ( $(window).width() < 576) {

            console.log(true)
        } else {
            $('#slider-travel .slider .slider__inner .slider__item-img').css('width', '100%');
        }

        console.log($(window).width())
    </script>
    
</body>

</html>
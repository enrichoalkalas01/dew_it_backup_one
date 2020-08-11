<?php include 'header.php'; ?>

<body>

    <style type="text/css">
        #banner-product-detail {
            height: auto;
            padding-bottom: 250px;
        }

        #product-detail-content #product-1 {
            position: relative;
        }

        #product-detail-content #product-1:before {
            content: '';
            width: 100%;
            height: 100%;
            /*background-color: #000;*/
            background-image: url('assets/img/press-release/press-release-component-three.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            position: absolute;
            bottom: -50px;
            left: -50px;
            z-index: -1;
        }

        #product-detail-content #product-1 .row {
            z-index: 7;
        }

        #product-detail-content #product-2 {
            position: relative;
        }

        #product-detail-content #product-2:before {
            content: '';
            width: 20%;
            height: 20%;
            /*background-color: #000;*/
            background-image: url('assets/img/press-release/press-release-component-four.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            position: absolute;
            top: 0px;
            right: -50px;
            z-index: 8;
        }

        #product-detail-content #product-2 .row {
            z-index: 7;
        }
    </style>

    <?php include 'navigation.php'; ?>

    <!-- Banner -->
    <section id="banner-product-detail-2">
        <div class="container-fluid p-0">
            <div class="row banner-hero-product-details d-flex justify-content-center">
                <div class="col-7 col-md-7 left-content-detail-product">
                    <div class="row">
                        <div class="col-2 col-md-2">
                            <div class="preview-thumbnail-image-product">
                                <div class="preview-product-image img-active">
                                    <img src="assets/img/img-component/product-on-the-go.png" alt="" class="img-fluid">
                                </div>
                                <div class="preview-product-image">
                                    <img src="assets/img/img-component/product-on-the-go.png" alt="" class="img-fluid">
                                </div>
                                <div class="preview-product-image">
                                    <img src="assets/img/img-component/product-on-the-go.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-10 col-md-10">
                            <div class="main-preview-product-image">
                                <img src="assets/img/img-component/product-on-the-go.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-md-5 right-content-detail-product">
                    <h4>On The Go</h4>
                    <h1>Body Polish</h1>
                    <h6>UV Protection & Cooling Sensation</h6>
                    <div class="desc-review-price">
                        <div class="review-price">
                            <div class="review-star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p>136 Reviews</p>
                            <a href="#">Write a Review</a>
                        </div>
                        <div class="price">
                            <h6>
                                Rp 150.000
                            </h6>
                        </div>
                    </div>

                    <!-- Accordion -->
                    <div class="accordion" id="accordion-product-info">
                        <div class="card">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <div class="panel-header">
                                    <div class="panel-title d-flex align-items-center">
                                        <h2 class="mb-0">
                                            What Is It
                                        </h2>
                                    </div>
                                    <div class="icon-panel">
                                        <i class="ion-plus icon-collapse"></i>
                                    </div>
                                </div>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion-product-info">
                                <div class="card-body">
                                    <p>
                                        <span>Step 1</span>: Bring your Dew It® Body Water Oil into the shower place
                                    </p>
                                    <p>
                                        <span>Step 2</span>: Take your normal shower
                                    </p>
                                    <p>
                                        <span>Step 3</span>: After you rinse, spray the Dew It® Body Water Oil all over your body
                                    </p>
                                    <p>
                                        We know you like to #DewIt in the shower!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <div class="panel-header">
                                    <div class="panel-title d-flex align-items-center">
                                        <h2 class="mb-0">
                                            How To Use It
                                        </h2>
                                    </div>
                                    <div class="icon-panel">
                                        <i class="ion-minus icon-collapse"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion-product-info">
                                <div class="card-body">
                                    <p>
                                        <span>Step 1</span>: Bring your Dew It® Body Polish in your bag/carry-on
                                    </p>
                                    <p>
                                        <span>Step 2</span>: Roll it on your arms and legs while walking, running, squatting… you decide
                                    </p>
                                    <p>
                                        <span>Step 3</span>: Massage into your arms and legs, don’t worry a simple stroke will do!
                                    </p>
                                    <p>
                                        We know you like to #DewIt on the go!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="panel-header">
                                    <div class="panel-title d-flex align-items-center">
                                        <h2 class="mb-0">
                                            Ingredients
                                        </h2>
                                    </div>
                                    <div class="icon-panel">
                                        <i class="ion-plus icon-collapse"></i>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-product-info">
                                <div class="card-body">
                                    <p>
                                        <span>Step 1</span>: Bring your Dew It® Body Water Oil into the shower place
                                    </p>
                                    <p>
                                        <span>Step 2</span>: Take your normal shower
                                    </p>
                                    <p>
                                        <span>Step 3</span>: After you rinse, spray the Dew It® Body Water Oil all over your body
                                    </p>
                                    <p>
                                        We know you like to #DewIt in the shower!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Of Accordion -->

                    <div class="quantity-button d-flex align-items-center">
                        <div class="quantity">
                            <span id="k-j" class="i-j">-</span>
                            <span id="data-j" class="i-j" value-jumlah="0">0</span>
                            <span id="t-j" class="i-j">+</span>
                        </div>
                        <div class="button-cart">
                            <a href="#">Add to Cart </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Banner -->

    <!-- Content -->
    <section id="product-detail-content">
        <div class="container-fluid p-0">
            <div class="row  d-flex justify-content-center content-detail-product">
                <div class="col-12 col-md-10">
                    <div class="video-product-details" type="button" class="btn btn-primary" data-toggle="modal" data-target="#BannerModal">
                        <img src="assets/img/img-component/video-product-detail.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-12 text-center title-other-products">
                    <h1>Other Products</h1>
                </div>
                <div class="col-12 col-md-6 card-other-product stretch-card">
                    <div class="vector-bubble-orange-details-product"></div>
                    <div class="card card-product-others" id="product-1">
                        <div class="row">
                            <div class="col-6 col-md-5 image-product-detail">
                                <img src="assets/img/img-component/in-the-shower.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-6 col-md-7 desc-product-detail">
                                <h1>BODY Water Oil</h1>
                                <p>
                                    Made specifically for those looking for the quickest way to moisturize their body without any hassle.
                                </p>
                                <div class="price-troli-others d-flex justify-content-between">
                                    <div class="list-price">
                                        <p>Rp 150.000</p>
                                    </div>
                                    <div class="button-to-troli">
                                        <a href=""><img src="assets/img/icon/troli-icon-circle.svg" alt="" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 card-other-product stretch-card">
                    <div class="vector-lines-details-product"></div>
                    <div class="card card-product-others" id="product-2">
                        <div class="row">
                            <div class="col-6 col-md-5 image-product-detail">
                                <img src="assets/img/img-component/before-bed.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-6 col-md-7 desc-product-detail">
                                <h1>BODY MASK</h1>
                                <p>
                                    Okay so there’s no time in the morning, there’s no time in the afternoon… we sure hope you have 5 minutes at night!
                                </p>
                                <div class="price-troli-others d-flex justify-content-between">
                                    <div class="list-price">
                                        <p>Rp 150.000</p>
                                    </div>
                                    <div class="button-to-troli">
                                        <a href=""><img src="assets/img/icon/troli-icon-circle.svg" alt="" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Content -->

    <!-- Modal Banner -->
        <div class="modal fade" id="BannerModal" tabindex="-1" role="dialog" aria-labelledby="BannerModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/nUcuNnDKzuA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="modal-footer" style="display: flex; justify-content: center; align-items: center;">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Of Modal bBanner -->

    <?php include 'footer.php'; ?>

    <!-- Internal JS -->

    <script type="text/javascript">
        $('#accordion-product-info .panel-header').on('click', function() {
            // let aria_detect = $(this).attr('aria-expanded');
            let aria_detect = $(this).parent().attr('aria-expanded');

            console.log(aria_detect)
            // alert(aria_detect);
            if (aria_detect == 'true') {
                $(this).find('i').attr('class', 'ion-plus');
            } else if (aria_detect == 'false') {
                $(this).find('i').attr('class', 'ion-minus');
            } else {
                $(this).find('i').attr('class', 'ion-plus');
            }
        });

        $('#t-j.i-j').on('click', function() {
            let value = $('#data-j.i-j').attr('value-jumlah');
            let number = Number(value);

            var x = 100;

            if (number <= x) {
                $('#data-j.i-j').attr('value-jumlah', number + 1);
                $('#data-j.i-j').html(number + 1);
                console.log(value);
                console.log(number + 1);
            } else {
                $('#data-j.i-j').attr('value-jumlah', number);
                $('#data-j.i-j').html(number);
                console.log(value);
                console.log(number);
            }
        });

        $('#k-j.i-j').on('click', function() {
            let value = $('#data-j.i-j').attr('value-jumlah');
            let number = Number(value);

            var x = 100;

            if (number > 0) {
                $('#data-j.i-j').attr('value-jumlah', number - 1);
                $('#data-j.i-j').html(number - 1);
                console.log(value);
                console.log(number - 1);
            } else {
                $('#data-j.i-j').attr('value-jumlah', number);
                $('#data-j.i-j').html(number);
                console.log(value);
                console.log(number);
            }
        });

        $('#banner-product-detail-2 .left-content-detail-product .preview-thumbnail-image-product .preview-product-image').on('click', function(event) {
            event.preventDefault();
            /* Act on the event */

            $('#banner-product-detail-2 .left-content-detail-product .preview-thumbnail-image-product .preview-product-image').removeClass('img-active');
            $(this).addClass('img-active');
            let data_img = $(this).find('img').attr('src');
            $('#banner-product-detail-2 .main-preview-product-image').find('img').attr('src', data_img)
            console.log(data_img)
        });
    </script>
</body>

</html>
<?php include 'header.php'; ?>

<body>

    <?php include 'navigation.php'; ?>

    <style type="text/css">
        #first-product .leaf-compontent-1 {
            content: '';
            width: 300px;
            height: 300px;
            /*background-color: #000;*/
            background-image: url('assets/img/img-component/bg-leaf-intro.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            position: absolute;
            left: -10%;
            top: -100px;
            transform: rotate(-30deg);
        }

        #second-product .leaf-compontent-2 {
            content: '';
            width: 250px;
            height: 250px;
            /*background-color: #000;*/
            background-image: url('assets/img/img-component/bg-leaf-intro.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            position: absolute;
            right: -7%;
            top: -15%;
            transform: scaleX(-1) rotate(-25deg);
        }

        #second-product .leaf-compontent-3 {
            content: '';
            width: 300px;
            height: 300px;
            /*background-color: #000;*/
            background-image: url('assets/img/img-component/bg-leaf-intro.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100% 100%;
            position: absolute;
            left: -10%;
            bottom: -100px;
            transform: rotate(-30deg);
        }
    </style>

    <!-- Banner -->
    <section id="banner-product">
        <div class="container-fluid p-0">
            <div class="row banner-hero-product d-flex justify-content-center">
                <div class="col-12 col-md-6 product-left">
                    <h1>01</h1>
                    <h4>In The Shower</h4>
                    <div class="product-price">
                        <h2>Body Water Oil</h2>
                        <p>Rp 150.000</p>
                    </div>
                    <p>
                        <span>
                            Skincare in the shower, what? Tell me more!
                        </span>
                    </p>
                    <p>
                        Do you find yourself rushing out of the house every morning?
                    </p>
                    <p>
                        Say hello to Dew It’s Body Water Oil! An oil and water based <br> formula that sprays evenly onto your skin, leaving it supple <br> dewy and moisturized all day long!
                    </p>

                    <div class="button-product">
                        <button id="product-1">
                            <span>Know It</span> <span><i class="fas fa-arrow-right"></i></span>
                        </button>
                        <button data-toggle="modal" data-target="#exampleModalCenter">
                            <span>Buy It</span> <span><i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center product-right">
                    <div class="image-product">
                        <img src="assets/img/img-component/product-1.png" alt="" class="img-fluid image-product-1">
                    </div>
                    <div class="image-product-item">
                        <img src="assets/img/img-component/in-the-shower.png" alt="" class="img-fluid images-product-item-1">
                    </div>
                    <div class="product-item-video" type="button" class="btn btn-primary" data-toggle="modal" data-target="#BannerModal">
                        <img src="assets/img/img-component/product-video.png" alt="" class="img-fluid product-video-1">
                    </div>
                    <h1>Products</h1>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="container-fluid p-0">
                        <div class="row justify-content-center p-0">
                            <div class="col 12 col-md-7 left-modal">
                                <h4>Cart</h4>
                                <div class="details-cart-product">
                                    <div class="row">
                                        <div class="col-4 col-md-4 cart-modal-details">
                                            <div class="modal-image-cart-product">
                                                <img src="assets/img/img-component/in-the-shower.png" alt="" class="img-fluid">
                                            </div>
                                            <div class="modal-details-product">
                                                <h6>Product</h6>
                                                <h1>New Tube</h1>
                                                <p>Rp 150.000</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-4 modal-quantity">
                                            <h6>Qty</h6>
                                            <div class="quantity-modal">
                                                <span id="k-j" class="i-j">-</span>
                                                <span id="data-j" class="i-j" value-jumlah="0">0</span>
                                                <span id="t-j" class="i-j">+</span>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-4 modal-sub-price">
                                            <h6>Sub</h6>
                                            <h1>Rp 150.000</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5 right-modal">
                                <div class="button-modal-clode">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <h4>Order Summary</h4>
                                <div class="row order-summary">
                                    <div class="col-6 col-md-6">
                                        <p>Sub Total</p>
                                        <p>Tax + Shipping Added</p>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <h4>Rp 150.000</h4>
                                    </div>
                                    <div class="col-12 col-md-12 button-modal-cart">
                                        <a href="#">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Of Banner -->

    <!-- Product 2 -->
    <section id="first-product">
        <div class="leaf-compontent-1"></div>
        <!-- <div class="leaf-product-2">
            <img src="assets/img/img-component/leaf-about.svg" alt="" class="img-fluid">
        </div> -->
        <div class="container-fluid p-0">
            <div class="row banner-hero-product d-flex justify-content-center">
                <div class="col-12 col-md-6 text-center product-left">
                    <div class="image-product">
                        <img src="assets/img/img-component/product-2.png" alt="" class="img-fluid image-product-2">
                    </div>
                    <div class="image-product-item">
                        <img src="assets/img/img-component/on-the-go.png" alt="" class="img-fluid images-product-item-1">
                    </div>
                    <div class="product-item-video" type="button" class="btn btn-primary" data-toggle="modal" data-target="#BannerModal">
                        <img src="assets/img/img-component/product-video.png" alt="" class="img-fluid product-video-1">
                    </div>
                </div>
                <div class="col-12 col-md-6 product-right">
                    <h1>02</h1>
                    <h4>On The Go</h4>
                    <div class="product-price">
                        <h2>Body Polish</h2>
                        <p>Rp 150.000</p>
                    </div>
                    <p>
                        <span>
                            Okay, hold on. Roll it while walking?
                        </span>
                    </p>
                    <p>
                        Uh huh, that’s right! Meet Dew It’s Body Polish, equipped with <br> the Dew It Roller to massage your tired skin. Complete with UV <br> Protection, this lightweight and cooling polish is here to race you to your next location looking <span style="font-family: 'gothambold';">100</span>%!
                    </p>

                    <div class="button-product">
                        <button id="product-2">
                            <span>Know It</span> <span><i class="fas fa-arrow-right"></i></span>
                        </button>
                        <button data-toggle="modal" data-target="#exampleModalCenter">
                            <span>Buy It</span> <span><i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Product 2 -->

    <!-- Product 3 -->
    <section id="second-product">
        <div class="leaf-compontent-2"></div>
        <div class="leaf-compontent-3"></div>
        <!-- <div class="leaf-product-3">
            <img src="assets/img/img-component/leaf-about.svg" alt="" class="img-fluid">
        </div> -->
        <div class="container-fluid p-0">
            <div class="row banner-hero-product d-flex justify-content-center">
                <div class="col-12 col-md-6 product-left">
                    <h1>03</h1>
                    <h4>Before Bed</h4>
                    <div class="product-price">
                        <h2>Body Mask</h2>
                        <p>Rp 150.000</p>
                    </div>
                    <p>
                        <span>
                            But what if there’s no time during the day?
                        </span>
                    </p>
                    <p>
                        We got you, girl! Comforting and thick, the Dew It Body Mask <br> is here to keep your skin hydrated all night long. Formulated with <br> (add ingredients), this mask is perfect for a night time routine <br> that keeps you moisturized while you sleep!
                    </p>

                    <div class="button-product">
                        <button id="product-3">
                            <span>Know It</span> <span><i class="fas fa-arrow-right"></i></span>
                        </button>
                        <button data-toggle="modal" data-target="#exampleModalCenter">
                            <span>Buy It</span> <span><i class="fas fa-arrow-right"></i></span>
                        </button>
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center product-right">
                    <div class="image-product-3">
                        <img src="assets/img/img-component/product-3.png" alt="" class="img-fluid image-product-photo">
                    </div>
                    <div class="image-product-item-3">
                        <img src="assets/img/img-component/before-bed.png" alt="" class="img-fluid images-product-item-1">
                    </div>
                    <div class="product-item-video-3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#BannerModal">
                        <img src="assets/img/img-component/product-video.png" alt="" class="img-fluid product-video-1">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Of Product 3 -->

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

        $('#product-1').on('click', function(e) {
            window.location.href = 'product-details-1.php';
        });

        $('#product-2').on('click', function(e) {
            window.location.href = 'product-details-2.php';
        });

        $('#product-3').on('click', function(e) {
            window.location.href = 'product-details-3.php';
        });
    </script>
</body>

</html>
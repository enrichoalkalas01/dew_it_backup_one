<?php include 'header.php'; ?>

<body>

    <style type="text/css">
        @media screen and ( max-width: 475px ) {
            #contact-us-content {
                padding: 5%;
            }

            #contact-us-content .maps-content {
                height: 500px;
            }

            #contact-us-content .content-form {
                padding-top: 50px;
            }

            #contact-us-content .content-form .form-content h1 {
                font-size: 36px;
            }

            #contact-us-content .content-form .form-content p {
                font-size: 18px;
            }

            #contact-us-content .content-form .form-content .form-group .form-control {
                margin-bottom: 25px;
            }

            #contact-us-content .content-form .form-content .form-group textarea {
                height: 100px;
            }

            #contact-us-content .content-form .form-content .button-submit-contact {
                max-width: 100%;
                width: auto;
                padding: 10px 25px;
                margin-top: 0;
            }

            form .main-button {
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }
    </style>

    <?php include 'navigation.php'; ?>

    <!-- Banner -->
    <section id="banner-contact-us">
        <div class="container-fluid p-0">
            <div class="banner-hero banner-hero-contact-us d-flex justify-content-center align-items-center" style="background: url('assets/img/background/bg-contact-us.png'); width:100%; background-size:cover; background-repeat:no-repeat;">
                <h1>Dew you want to <br>know more?<br>Ask It!</h1>
            </div>
        </div>
    </section>
    <!-- End Of Banner -->

    <section id="contact-us-content">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="maps-content">
                        <div class="dots-contact-us"></div>
                        <div id="maps"></div>
                        <div class="bubble-orange-contact-us"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6 content-form">
                    <div class="form-content">
                        <h1>Get In Touch</h1>
                        <p>Fill It & We’ll Dew the rest!</p>
                        <div action="" class="form">

                            <div class="form-group box-form">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                            </div>
                            <div class="form-group box-form">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="form-group box-form">
                                <label>Phone Number</label>
                                <input type="text" name="phone-number" class="form-control" id="phone-number" placeholder="Your PhoneNumber">
                            </div>
                            <div class="form-group box-form">
                                <label>Message</label>
                                <div>
                                    <textarea class="form-control" name="message" name="message" placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="main-button">
                                <a class="button-submit-contact" id="button-form-cu"> <span>Send</span> <img src="assets/img/icon/icon-arrow-next-18px.svg" alt="" class="img-fluid arrow-button-black"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Internal JS -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBZKOUlHP5DzjJs_wrfKZklqnVhSobGlTI&callback=initMap" async defer></script>

    <script type="text/javascript">
        function initMap() {
            var map = new google.maps.Map(document.getElementById('maps'), {
                center: {
                    lat: -6.227169,
                    lng: 106.806705
                },
                zoom: 12,
                zoomControl: false,
                streetViewControl: false,
                mapTypeControl: false,
                fullscreenControl: false,
            });

            var infoWindow = new google.maps.InfoWindow();
            var bounds = new google.maps.LatLngBounds(); // diluar looping

            pos = new google.maps.LatLng(-6.227169, 106.806705);
            bounds.extend(pos); // di dalam looping
            marker = new google.maps.Marker({
                position: pos,
                map: map,
                title: 'Uluru (Ayers Rock)',
            });
            marker.setMap(map);
        }
    </script>

    <script type="text/javascript">
        $(' .form-content .form-group .form-control').click(function() {
            $('.form-control').removeClass("active");
            $(this).addClass("active");
        });

        // Ajax Form
        let name, email, phone_number, message;

        $('#button-form-cu').on('click', function() {
            name = $('#name').val();
            email = $('#email').val();
            phone_number = $('#phone-number').val();
            message = $('#message').val();

            let data_detail = {
                data_name: name,
                data_email: email,
                data_phone: phone_number,
                data_message: message
            };

            console.log(data_detail);

            $.ajax({
                data: data_detail,
                dataType: 'JSON',
                error: function() {
                    alert('Server Error.');
                },
                success: function(data){
                    if (data.status == 'success') {
                        console.log(data)
                    }
                    else {
                        alert(data.message);
                    }
                },
                type : 'POST',
                url : '/git/dew_it/tester-backend.php'
            });
        });
    </script>
</body>

</html>
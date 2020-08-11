<style type="text/css">
    header nav#mobile-nav {
        display:  none;
    }
    nav #mobile-page {
        width: 100%;
        height: auto;
        position: relative;
        display: none;
    }

    nav #mobile-page ul {
        width: 100%;
        height: auto;
        position: relative;
        display: flex;
        flex-direction: column;
        padding: 25px 50px;
        text-align: left;
        background-color: #fff;
    }

    nav #mobile-page ul li {
        color: #000;
        border-top: 1px solid rgba(25,25,25,0.5);
    }

    nav #mobile-page ul li:nth-child(1) {
        border-top: unset;
    }

    nav #mobile-page ul li .link {
        width: 100%;
        height: auto;
        position: relative;
        padding-top: 10px;
    }

    header nav#desktop-nav.shadow {
        height: auto !important;
    }
    
    @media screen and ( min-width: 768px ) {
        #desktop-nav {
            display: block;
        }

        #mobile-nav {
            display:  none !important;
        }
    }

    @media screen and ( max-width: 767px ) {
        #desktop-nav {
            display: none;
        }

        #mobile-nav {
            display:  block !important;
        }

        nav#mobile-nav {
            display: block;
        }

        nav#mobile-nav .box-bar {
            width: 100%;
            height: 100%;
            position: relative;
            display: grid;
            grid-template-columns: 25% 50% 25%;
        }
    }

    @media screen and ( max-width: 475px ) {
        nav#mobile-nav .menu-bar .burger-menu .bar {
            height: 4px;
            margin: 3px 0;
        }
    }

    @media screen and ( max-width: 360px ) {
        nav#mobile-nav {
            grid-template-columns: 25% 45% 25%;
        }
    }
</style>
<header>
    <nav id="desktop-nav">
        <div class="menu-icon">
            <i class="fa fa-bars fa-2x"></i>
        </div>
        <div class="logo">
            <a href="index.php">
                <img src="assets/img/logo/logo-dew-it.svg" alt="" class="img-fluid navbar-brand">
            </a>
        </div>
        <div class="cart">
            <ul>
                <li><a href="#"><img src="assets/img/icon/ic-troli.svg" alt="" class="img-fluid img-troli-nav">Cart<span></span></a></li>
                <li class="nav-search-bar"><a href="#"><img src="assets/img/icon/ic-search.svg" alt="" class="img-fluid img-search-bar-nav"></a></li>
            </ul>
        </div>
        <div class="menu">
            <ul>
                <li><a href="about.php" class="menu-link">About It</a></li>
                <li><a href="product.php" class="menu-link">Shop It</a></li>
                <li><a href="#" class="menu-link">Explore It</a></li>
                <li><a href="contact-us.php" class="menu-link">Contact It</a></li>
            </ul>
        </div>
    </nav>

    <nav id="mobile-nav">
        <div class="box-bar">
            <div class="menu-bar">
                <div class="burger-menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
            </div>
            <div class="logo">
                <a href="index.php">
                    <img src="assets/img/logo/logo-dew-it.svg" alt="" class="img-fluid navbar-brand">
                </a>
            </div>
            <div class="cart">
                <div class="wrapper">
                    <a href="#"><img src="assets/img/icon/ic-troli.svg" alt="" class="img-fluid img-troli-nav">Cart (<span>0</span>)</a>
                </div>
            </div>
        </div>
        <div id="mobile-page" data-aria="false">
            <ul>
                <li>
                    <a href="">
                        <div class="link">
                            <span>About It</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="link">
                            <span>Shop It</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="link">
                            <span>Explore It</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="link">
                            <span>Contact It</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <style type="text/css">
        #mobile-page ul li {
            list-style: none;
            margin: 10px 0;
        }

        #mobile-page ul li a {
            text-decoration: none;
            color: unset;
        }
    </style>
</header>


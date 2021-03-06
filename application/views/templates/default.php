<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="HandheldFriendly" content="true" />

    <meta name="keywords" content="jewellery, jewelry, diamond, fajar, earrings, necklace, necklaces, bracelets, rings, pendants, jewelers, engagement rings, gold jewelry, jewelry, fajarbaru, diamond jewelry, fine jewelry, jewelry stores, mens jewelry, men's jewelry, jewelry store, fajar baru, fajar baru cibubur, women's jewelry, fajarbarucibubur, toko perhiasan, emas, berlian, cincin kawin, cincin pertunangan, cincin berlian" />
    <meta name="description" content="" />

    <meta property="og:url" content="http://www.fajarbarujewellery.com/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Fajar Baru" />
    <meta property="og:description" content="Fajar Baru" />
    <meta property="og:image" content="" />


    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fajar Baru</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Source+Sans+Pro" rel="stylesheet">
    
    <script src="<?php echo base_url() ?>js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>js/particles.js"></script>
    <style>
        .logoFajar {
            -webkit-transform: rotateX(150deg); /* Safari */
            transform: rotateX(150deg);
            position: absolute;
            margin:auto;
            left: 45%;
        }
        .navbar{
            margin-bottom: 0;
            border:none;
        }
        .navbar-nav>li{
            margin-right: 50px;
            margin-left: 50px;
        }

        .parallax-window {
            min-height: 400px;
            background: transparent;
        }
        /*Homepage buttoms*/
        #imgbutton2{
            background: url(<?php echo base_url() ?>assets/log3.jpg);
            background-size: cover;
        }
        #imgbutton3{
            background: url(<?php echo base_url() ?>assets/log5.jpg);
            background-size: cover;   
        }
        #imgbutton4{
            background: url(<?php echo base_url() ?>assets/log1.jpg);
            background-size: cover;   
        }
        #imgbutton5{
            background: url(<?php echo base_url() ?>assets/log2.jpg);
            background-size: cover;   
        }
        #imgbutton6{
            background: url(<?php echo base_url() ?>assets/log8.jpg);
            background-size: cover;   
        }
        .hoverimg{
            min-height: 400px;
        }
        .hoverimg2{
            min-height: 650px;
        }
        .hoverimg3{
            min-height: 320px;
        }
        .carousel-control.left, .carousel-control.right {
           background-image:none !important;
           filter:none !important;
        }
        .carousel-inner>.item>img, .carousel-inner>.item>a>img {
            display: block;
            height: auto;
            max-width: 100%;
            line-height: 1;
            width: 100%; // Add this
        }
        /*Social Media button on head*/
        #social-media{
            position: absolute;
            right: 7px;
            top: 7px;
        }
        .img{
            display: inline;
        }
        .sosmed:hover img{
            -webkit-filter: brightness(3); /* Safari 6.0 - 9.0 */
            filter: brightness(3);
        }
        /*Footer settings*/
        #social-media-footer{
            position: absolute;
            left:10;
            top: 60;
        }
        .foot-head{
            font-variant: small-caps;
            font-size: 15px;
        }


        /*Animation element slide left*/
        .animation-element {
          opacity: 0;
          position: relative;
        }
        .animation-element.slide-left {
          opacity: 0;
          -moz-transition: all 500ms linear;
          -webkit-transition: all 500ms linear;
          -o-transition: all 500ms linear;
          transition: all 500ms linear;
          -moz-transform: translate3d(-100px, 0px, 0px);
          -webkit-transform: translate3d(-100px, 0px, 0px);
          -o-transform: translate(-100px, 0px);
          -ms-transform: translate(-100px, 0px);
          transform: translate3d(-100px, 0px, 0px);
        }

        .animation-element.slide-left.in-view {
          opacity: 1;
          -moz-transform: translate3d(0px, 0px, 0px);
          -webkit-transform: translate3d(0px, 0px, 0px);
          -o-transform: translate(0px, 0px);
          -ms-transform: translate(0px, 0px);
          transform: translate3d(0px, 0px, 0px);
        }

    </style>
  </head>
  <body>
    <header id="particles-js" style="position: relative;">
            <!-- <div id="infinitespin" class="rotating"></div> -->
            <div class="animated flipInY logoFajar">
                <img src="<?php echo base_url() ?>assets/FajarBaru.png" width="180" id="logo" height="180" class="img img-responsive"  alt="Logo Fajar baru">    
            </div>
            <div id="social-media">
                <a href="" class="sosmed"><img src="<?php echo base_url() ?>assets/iconig.png" height="25px" width="25px" class="img img-responsive"></a>
                <a href="" class="sosmed"><img src="<?php echo base_url() ?>assets/iconfb.png" height="25px" width="25px" class="img img-responsive"></a>
            </div> 
    </header>
        <nav class="navbar navbar-default" id="navbar" style="padding-bottom: 0px !important;">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav" style="padding-bottom: 0px !important;">
                    <li><a href="#">Home</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Collection <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Diamond</a></li>
                        <li><a href="#">Gold</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catalog <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Necklace</a></li>
                        <li><a href="#">Ring</a></li>
                        <li><a href="#">Bracelet</a></li>
                        <li><a href="#">Earring</a></li>
                        <li><a href="#">Pendant</a></li>
                      </ul>
                    </li>
                    <li><a href="#">About Us </a></li>
                    <li><a href="#">Contact Us </a></li>
                  </ul>
                  
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    

<?php echo $body?>
<hr>
<!--Footer container-->
<div class="container">
    <!-- <div class="row">
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php #echo base_url() ?>assets/ring.jpg" data-min-height="600px"></div>
    </div> -->
    <footer style="height: 50px;">
        <div class="row" style="padding-top: 0px!important;">
            <div class="col-md-3">
                <p><div class="texthead foot-head">Find Us</div></p>
                <div id="social-media-footer" class="hidden-xs">
                    <a href="" class="sosmed"><img src="<?php echo base_url() ?>assets/iconig.png" height="35px" width="35px" class="img img-responsive"></a>
                    <a href="" class="sosmed"><img src="<?php echo base_url() ?>assets/iconfb.png" height="35px" width="35px" class="img img-responsive"></a>
                </div>
            </div>
            <div class="col-md-3" style="padding-top: 0px !important;">
                <p><div class="texthead foot-head">Contact Us</div></p>
                <p><a href="tel:+622187713309"><i class="fa fa-phone iconfoot" aria-hidden="true"></i>+6221 – 877 133 09</p></a>
                <p><a href="tel:+6285881694188"><i class="fa fa-whatsapp iconfoot" aria-hidden="true"></i>+62858 – 8169 4188</p></a>
                <p><a href="mailto:fbcibubur@gmail.com"><i class="fa fa-envelope iconfoot" aria-hidden="true"></i>fbcibubur@gmail.com</p></a>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-xs-12">
                        <p><div class="texthead foot-head">Store Location</div></p>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7" style="padding-right: 0px;">
                        <a href="http://maps.google.com/maps?daddr=-6.351656996788107,106.88085452785504&amp;ll=">
                            <iframe
                              width="100%"
                              height="120"
                              frameborder="0" style="border:0"
                              src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCmspcQ1OKmdHpxFxcpUYQtLsdkMaqdQNI
                                &q=pasar%20jaya%20cibubur" allowfullscreen>
                            </iframe>
                            <!--AIzaSyCmspcQ1OKmdHpxFxcpUYQtLsdkMaqdQNI-->
                                
                        
                        </a>    
                    </div>
                    <div class="col-md-5">
                        Pasar Jaya Cibubur<br>AL01 AKS No. 52-55, AKS No. 7-10<br> 
                        JL. Raya Lap. Tembak – Jakarta Timur<br> 
                        DKI Jakarta 13720 INDONESIA
                    </div>
                </div>
            </div>            
        </div>
        <div class="row"  style="padding-top: 20px;">
            <div class="col-xs-12 text-center">
                <p style="font-variant: small-caps;">Copyright &copy; Fajar Baru Gold & Jewellery</p>
            </div>
        </div>
    </footer>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script type="text/javascript" src="<?php echo base_url() ?>js/main.js"></script>
    <script src="<?php echo base_url() ?>js/app.js"></script>
    <script src="<?php echo base_url() ?>js/stats.js"></script>
    
  </body>
</html>
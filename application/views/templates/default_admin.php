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
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
                  
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    

<?php echo $body?>
<hr>
<!--Footer container-->
<div class="container">
    <footer style="height: 50px;">
        
        <div class="row"  style="padding-top: 20px;">
            <div class="col-xs-12 text-center">
                <p style="font-variant: small-caps;">Copyright &copy; Hassee 2016</p>
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
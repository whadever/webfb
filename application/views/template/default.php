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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
    <script src="<?php echo base_url() ?>js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>js/particles.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jssor.slider-22.0.3.mini.js"></script>
    <style>
        .parallax-window {
            min-height: 400px;
            background: transparent;
        }
        .navbar{
            margin-bottom: 0;
            border:none;
        }
        .navbar-nav>li{
            margin-right: 50px;
            margin-left: 50px;
        }
        #imgbutton2{
            background: url(<?php echo base_url() ?>assets/log4.jpg);
            background-size: cover;
        }
        #imgbutton3{
            background: url(<?php echo base_url() ?>assets/jewel1.jpg);
            background-size: cover;   
        }
        #imgbutton4{
            background: url(<?php echo base_url() ?>assets/log5.jpg);
            background-size: cover;   
        }
        #imgbutton5{
            background: url(<?php echo base_url() ?>assets/log6.jpg);
            background-size: cover;   
        }
        #imgbutton6{
            background: url(<?php echo base_url() ?>assets/log4.jpg);
            background-size: cover;   
        }
        .hoverimg{
            min-height: 380px;
        }
        .hoverimg2{
            min-height: 520px;
        }
        .hoverimg3{
            min-height: 255px;
        }
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('<?php echo base_url() ?>img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('<?php echo base_url() ?>img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }

        .logoFajar {
            -webkit-transform: rotateX(150deg); /* Safari */
            transform: rotateX(150deg);
            position: absolute;
            margin:auto;
            left: 45%;
        }/*
        #infinitespin{
            position: absolute;
            left: 48.6%;
            top:5%;
            height: 80px;
            width: 80px;
            background: url('<?php echo base_url() ?>assets/spinner.png') center center no-repeat;
            background-size: cover;
        }
        @-webkit-keyframes rotating {
            from{
                -webkit-transform: rotate(0deg);
            }
            to{
                -webkit-transform: rotate(360deg);
            }
        }
        .rotating {
            -webkit-animation: rotating 10s linear 2;
            visibility: hidden;
        }*/

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
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gifts <span class="caret"></span></a>
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
                    <li><a href="#">About Us </a></li>
                    <li><a href="#">Contact Us </a></li>
                  </ul>
                  
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    
<div class="container-fluid" id="sliderfluid">
<?php echo $body?>
</div>
<div class="container-fluid">

    <!-- <div class="row">
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php #echo base_url() ?>assets/ring.jpg" data-min-height="600px"></div>
    </div> -->
    <footer style="height: 50px;"></footer>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script type="text/javascript" src="<?php echo base_url() ?>js/main.js"></script>
    <script src="<?php echo base_url() ?>js/app.js"></script>
    <script src="<?php echo base_url() ?>js/stats.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.lazylinepainter-1.7.0.js"></script>
    <script src="<?php echo base_url() ?>js/logopainter.js"></script>
    <script>
      
      
      update = function() {
       
        requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
      
     $(document).ready(function(){ 
        var $logopaint = $('#logopaint');
        function init(){
            $logopaint.lazylinepainter( 
            {
                "svgData": pathObj,
                "strokeWidth": 2,
                "strokeColor": "#e09b99"
            });
            $logopaint.lazylinepainter('paint'); 
        };
     });

    </script>
  </body>
</html>
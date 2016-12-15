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
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Source+Sans+Pro" rel="stylesheet">
    
    <script src="<?php echo base_url() ?>js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/parallax.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>js/particles.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>js/jssor.slider-22.0.3.mini.js"></script>
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
        
        /*
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

    </style>
  </head>
  <body>
    <header id="particles-js" style="position: relative;">
            <div id="social-media" class="hidden-xs">
                <a href="" class="sosmed"><img src="<?php echo base_url() ?>assets/iconig.png" height="25px" width="25px" class="img img-responsive"></a>
                <a href="" class="sosmed"><img src="<?php echo base_url() ?>assets/iconfb.png" height="25px" width="25px" class="img img-responsive"></a>
            </div>
            <!-- <div id="infinitespin" class="rotating"></div> -->
            <div class="animated flipInY logoFajar">
                <img src="<?php echo base_url() ?>assets/FajarBaru.png" width="180" id="logo" height="180" class="img img-responsive"  alt="Logo Fajar baru">    
            </div>    

    </header>

    <!--Navbar-->
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
                    <li><a href="#">About Us </a></li>
                    <li><a href="#">Contact Us </a></li>
                  </ul>
                  
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
 <!--Slider container-->   
<div class="container-fluid" id="sliderfluid">
    <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo base_url() ?>assets/Website5.jpg" alt="...">
              <!-- <div class="carousel-caption">
                ...
              </div> -->
            </div>
            <div class="item">
              <img src="<?php echo base_url() ?>assets/Website2.jpg" alt="...">
              <!-- <div class="carousel-caption">
                ...
              </div> -->
            </div>
            <div class="item">
              <img src="<?php echo base_url() ?>assets/Website1.jpg" alt="...">
              <!-- <div class="carousel-caption">
                ...
              </div> -->
            </div>
            <!-- ... -->
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
</div>
<!--Content-->
<div class="container-fluid">
    <div class="row" style="padding-top: 10px;padding-bottom: 10px;">
        <div class="col-xs-5">
                <div id="imgbutton1" class="hoverimg" style="position: relative;">
                    <div style="position: absolute; color: #000; font-size: 20px; top: 120px; left:10px;text-align: left;">
                        <h1 class="texthead">Fajar Baru</h1>
                        <h3>Jewellery Collection</h3>
                    </div>
                </div>
        </div>
        <div class="col-xs-7" >
            <div id="imgbutton2" class="hoverimg"></div>
        </div>
    </div>

    <!-- <div class="row">
        <div class="col-xs-12">
            <div id="imgbutton6" class="hoverimg"></div>
        </div>
    </div>

    <div class="row" style="padding-top: 10px;padding-bottom: 10px;">
        <div class="col-xs-7">
            <div id="imgbutton2" class="hoverimg"></div>
                
        </div>
        <div class="col-xs-5" >
            <div id="imgbutton1" class="hoverimg" style="position: relative;">
                    <div style="position: absolute; color: #000; font-size: 20px; top: 120px; right:10px;text-align: right;">
                        <h1 class="texthead">Fajar Baru</h1>
                        <h3>Jewellery Collection</h3>
                    </div>
                </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-xs-12">
                    <div id="imgbutton3" class="hoverimg2"></div>    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row"  style="margin-bottom: 10px;">
                <div class="col-xs-12">
                    <div id="imgbutton4" class="hoverimg3"></div>    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="imgbutton5" class="hoverimg3"></div>    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-xs-12">
                    <div id="imgbutton6" class="hoverimg2"></div>    
                </div>
            </div>
        </div>
    </div>
</div>

<!--Footer container-->
<div class="container-fluid">
    <!-- <div class="row">
        <div class="parallax-window" data-parallax="scroll" data-image-src="<?php #echo base_url() ?>assets/ring.jpg" data-min-height="600px"></div>
    </div> -->
    <footer style="height: 50px;">
        
    </footer>
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
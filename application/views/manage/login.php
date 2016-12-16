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

    <link href="<?php echo base_url() ?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Source+Sans+Pro" rel="stylesheet">
    
    <script src="<?php echo base_url() ?>js/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script>
    <style>
        .loginbox{
            margin-top: 50px;
            border:1px solid #263b85;
            padding-bottom: 20px;
        }
        .form-group{
            padding-left: 70px;
            padding-right: 70px;
        }
        .form-control{
            background-color: rgba(52, 73, 94,0.5) !important;
            color: #fff;
            border: none;
            border-bottom: #fff solid 1px;
            box-shadow: none;
            border-radius: 0px;
        }
        .form-control:focus{
            border:1px solid #263b85;
            background-color: rgba(149, 165, 166,0.6) !important;
            box-shadow: rgba(236, 240, 241,0.6)!important;
        }
        .form-control::-webkit-input-placeholder { /* WebKit, Blink, Edge */
            color:    #263b85;
            font-weight: bold;
        }
        .form-control:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
           color:    #263b85;
           opacity:  1;
        }
        .form-control::-moz-placeholder { /* Mozilla Firefox 19+ */
           color:    #263b85;
           opacity:  1;
        }
        .form-control:-ms-input-placeholder { /* Internet Explorer 10-11 */
           color:    #263b85;
        }
        .btn-primary{
            background-color: #263b85;
            text-transform: uppercase;
            border-radius: 0px;
            border:1px #fff solid;
        }
        .btn-primary:hover{

            background-color: rgba(52, 73, 94,0.6);
            border:1px rgba(52, 73, 94,0.6) solid;
        }
    </style>
  </head>
  <body >
    <div class="container">
      <div class="row text-center">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="padding:30px;">
              
                <div id="login">
                  <div class="row">
                    <img src="<?php echo base_url()?>assets/FajarBaru.png" width="250px">
                  </div>
                  <div class="row">
                    <div class="loginbox">
                        <?php echo form_open('manage/login')?>
                          <div class="form-group" style="background-color: #263b85 !important;padding-top: 4px;padding-bottom: 4px;">
                            <h4 style="color: #fff">Login</h4>
                          </div>
                          <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                          </div>
                          <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                          </div>
                          <input type="submit" value="Login" name="login" class="btn btn-primary">                     
                          <?php echo form_close()?>
                      </div>
                  </div>
                </div>
            </div>
            
            <div class="col-md-4"></div>
          
        
      </div>
    </div>

    <script type="text/javascript" src="<?php echo base_url() ?>js/main.js"></script>
    <script src="<?php echo base_url() ?>js/app.js"></script>
    <script src="<?php echo base_url() ?>js/stats.js"></script>
    
  </body>
</html>
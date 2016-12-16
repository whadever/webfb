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
              <div class="carousel-caption">
                <h1>Your One Stop Jewellery Shop</h1>
              </div>
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
<div class="container">
    <div class="row animation-element slide-left" style="padding-top: 10px;padding-bottom: 10px;">
        <div class="col-xs-5">
                <div id="imgbutton1" class="hoverimg" style="position: relative;">
                    <div style="position: absolute; color: #000; font-size: 20px; top: 120px; left:10px;text-align: left;">
                        <h1 class="texthead">Fajar Baru</h1>
                        <h3>Definition of new perfection</h3>
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


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script type="text/javascript" src="<?php echo base_url() ?>js/main.js"></script>
    <script src="<?php echo base_url() ?>js/app.js"></script>
    <script src="<?php echo base_url() ?>js/stats.js"></script>
    <script src="<?php echo base_url() ?>js/logopainter.js"></script>
    <script>
      update = function() {
       
        requestAnimationFrame(update);
      };
      requestAnimationFrame(update);
    </script>
    <script>
        var $animation_elements = $('.animation-element');
        var $window = $(window);

        function check_if_in_view() {
          var window_height = $window.height();
          var window_top_position = $window.scrollTop();
          var window_bottom_position = (window_top_position + window_height);
         
          $.each($animation_elements, function() {
            var $element = $(this);
            var element_height = $element.outerHeight();
            var element_top_position = $element.offset().top;
            var element_bottom_position = (element_top_position + element_height);
         
            //check to see if this current container is within viewport
            if ((element_bottom_position >= window_top_position) &&
                (element_top_position <= window_bottom_position)) {
              $element.addClass('in-view');
            } else {
              $element.removeClass('in-view');
            }
          });
        }

        $window.on('scroll resize', check_if_in_view);
        $window.trigger('scroll');

    </script>
  </body>
</html>

        

        <!--page title start-->
        <section class="page-title page-title-bg page-title-center ptb-90">
            <div class="container">
                <h2 class="text-bold white-text font-40">Service</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Service</li>
                </ol>
            </div>
        </section>
        <!--page title end-->



        <section class="section-padding">
          <div class="container">

              <div class="row">
                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE0B7;</i>
                          </div>
                          <div class="desc">
                              <h2>Creative Design</h2>
                              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE912;</i>
                          </div>
                          <div class="desc">
                              <h2>Fully Responsive</h2>
                              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE8B8;</i>
                          </div>
                          <div class="desc">
                              <h2>Flexible Page Builder</h2>
                              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE323;</i>
                          </div>
                          <div class="desc">
                              <h2>Mobile Applicaion Design</h2>
                              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE412;</i>
                          </div>
                          <div class="desc">
                              <h2>Professional Photography</h2>
                              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->

                  <div class="col-md-4">
                      <div class="featured-item hover-outline brand-hover radius-4">
                          <div class="icon">
                              <i class="material-icons colored brand-icon">&#xE02C;</i>
                          </div>
                          <div class="desc">
                              <h2>Moting Graphics Design</h2>
                              <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                          </div>
                      </div><!-- /.featured-item -->
                  </div><!-- /.col-md-4 -->
              </div><!-- /.row -->
          </div>
        </section>



        <section class="section-padding chart-wrapper overlay">
            <div class="container">

              <div class="row mb-50">
                <div class="col-md-6">
                  <h2 class="white-text mb-sm-30">We are continually working on improving matrox for more feature and demos</h2>
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                  <p class="white-text">Proactively maximize exceptional infrastructures via vertical initiatives. Continually benchmark cross-unit technology and efficient solutions. Distinctively monetize professional initiatives with client-centric e-commerce. Synergistically embrace performance based benefits and professional strategic theme areas. Enthusiastically disseminate sustainable technology before user friendly web services.</p>
                </div><!-- /.col-md-6 -->
              </div><!-- /.row -->


              <div class="row chart-skill-wrapper text-center">
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="chart" data-percent="79">
                          <span class="percent white-text"></span>
                          <div class="chart-text">
                            <span class="white-text">Concept</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="chart" data-percent="65">
                          <span class="percent white-text"></span>
                          <div class="chart-text">
                            <span class="white-text">Design</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="chart" data-percent="89">
                          <span class="percent white-text"></span>
                          <div class="chart-text">
                            <span class="white-text">Develompent</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="chart" data-percent="85">
                          <span class="percent white-text"></span>
                          <div class="chart-text">
                            <span class="white-text">Finish</span>
                          </div>
                      </div>
                  </div>
              </div>

            </div><!-- /.container -->
        </section>



       

        <script>
          $('.chart-skill-wrapper').on('inview', function(event, visible, visiblePartX, visiblePartY) {
              if (visible) {
                  $('.chart').easyPieChart({
                      //your configuration goes here
                      easing: 'easeOut',
                      delay: 3000,
                      barColor:'#71c44c',
                      trackColor:'rgba(255,255,255,0.2)',
                      scaleColor: false,
                      lineWidth: 8,
                      size: 140,
                      animate: 2000,
                      onStep: function(from, to, percent) {
                          this.el.children[0].innerHTML = Math.round(percent);
                      }

                  });
                  $(this).off('inview');
              }
          });

        </script>
 
  
</html>
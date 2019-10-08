        <!--page title start-->
        <section class="page-title page-title-bg page-title-center ptb-90">
            <div class="container">
                <h2 class="text-bold white-text font-40">Calculator de pret</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Calculator de pret</li>
                </ol>
            </div>
        </section>
        <!--page title end-->
        <form action="<?php echo base_url('calculate_price') ?>" method="post">
        <section class="section-padding">
          <div class="container">
            <div class="row featured-item hover-outline brand-hover radius-4">
                <div class="icon"><i class="material-icons colored brand-icon">&#xE0B7;</i></div>
                <h2>What best describes you:</h2>
                <div class="">
                          <div class="desc">
                              <p>
                                  <input type="radio" name="description" value="1"> Vreau sa angajez un web design.<br>
                                  <input type="radio" name="description" value="2"> Sunt deja web designer, ma informez.<br>
                                  <input type="radio" name="description" value="3"> Doar ma interesez, sunt in cautare de oferte.
                              </p>
                          </div>
                      </div><!-- /.featured-item -->
            </div>
            <div class="row featured-item hover-outline brand-hover radius-4">
                  <div class="icon"><i class="material-icons colored brand-icon">&#xE0B7;</i></div>
                  <h2>Basic Website Needs:</h2>
                  <div class="">
                      <div class="desc">
                          <p>
                              <input type="radio" name="basic_needs" id="type_1" checked value="new_website"> Am nevoie de un web site nou.<br>
                              <input type="radio" name="basic_needs" id="type_2" value="total_revamp"> Am nevoie de o modernizare totala pentru un site pe care il detin deja.<br>
                              <input type="radio" name="basic_needs" id="type_3" value="minor_updates"> Site-ul meu are nevoie de schimbari minore.
                          </p>
                      </div>
                  </div><!-- /.featured-item -->
            </div>
            <div class="row featured-item hover-outline brand-hover radius-4">
                <div class="icon"><i class="material-icons colored brand-icon">&#xE0B7;</i></div>
                  <h2>Web site type:</h2>
                  <div class="">
                      <div class="desc">
                          <p>
                              <input type="radio" name="website_type" id="personal" value="450">Site de prezentare personal/de firma.<br>
                              <input type="radio" name="website_type" id="ecommerce" value="3000">Site de e-comnert.<br>
                              <input type="radio" name="website_type" id="portal_web" value="2500">Portal web generalist.<br>
                              <input type="radio" name="website_type" id="catalog_site" value="1000">Site Tip Catalog Sau Portofoliu.<br>
                              <input type="radio" name="website_type" id="media_site" value="500">Portal/Site de stiri/Media.<br>
                              <input type="radio" name="website_type" id="blog" value="100">Blog.<br>
                          </p>
                      </div>
                </div><!-- /.featured-item -->
            </div>

              <div class="row featured-item hover-outline brand-hover radius-4">
                  <div class="icon"><i class="material-icons colored brand-icon">&#xE0B7;</i></div>
                  <h2>Integrations:</h2>
                  <div class="">
                      <div class="desc">
                          <p>
                              <input type="checkbox" name="integrations[facebook_login]" value="100">Logare cu facebook.<br>
                              <input type="checkbox" name="integrations[google_login]" value="100">Logare cu google.<br>
                              <input type="checkbox" name="integrations[page_like]" value="50">Like-uri pe pagini specifice.<br>
                              <input type="checkbox" name="integrations[share_page]" value="50"> Share pe pagini specifice<br>
                              <input type="checkbox" name="integrations[google_maps]" value="100">Integrare cu google maps.<br>
                              <input type="checkbox" name="integrations[contact_form]" value="50">Contact Form.<br>
                              <input type="checkbox" name="integrations[site_search]" value="100">Site Search.<br>
                              <input type="checkbox" name="integrations[file_uploads]" value="100">User File Uploads.<br>
                              <input type="checkbox" name="integrations[twiter_share]" value="50">Share pe twitter.<br>
                              <input type="checkbox" name="integrations[other_integration]" value="100">Alt tip de integrare.<br>
                              <textarea name="other_integration" rows="40"></textarea>
                          </p>
                      </div>
                  </div><!-- /.featured-item -->
              </div>
              <div class="row featured-item hover-outline brand-hover radius-4">
                  <div class="icon"><i class="material-icons colored brand-icon">&#xE0B7;</i></div>
                  <h2>Tip grafica:</h2>
                  <div class="">
                      <div class="desc">
                          <p>
                              <input type="radio" name="graphics" value="300">Design fluid.<br>
                              <input type="radio" name="graphics" value="100">Design fix.<br>
                          </p>
                      </div>
                  </div><!-- /.featured-item -->

              </div>
            <div class="row featured-item hover-outline brand-hover radius-4">
                <div class="icon"><i class="material-icons colored brand-icon">&#xE0B7;</i></div>
                <h2>Elemente grafice:</h2>
                <div class="">
                          <div class="desc">
                              <p>
                                  <input type="radio" name="graphic_elements" value="100">Voi trimite grafica site-ului gata de utilizare(imagini, poze etc).<br>
                                  <input type="radio" name="graphic_elements" value="500">Am nevoie de grafica speciala creata pentru site-ul meu.<br>
                                  <input type="radio" name="graphic_elements" value="150">Am nevoie de galerii de poze/slideshow.<br>
                                  <input type="radio" name="graphic_elements" value="400">Doresc sa se integreze si editeze un catalaog de imagini pe care le detin..<br>
                              </p>
                          </div>
                      </div><!-- /.featured-item -->
                
            </div>
            <div class="row featured-item hover-outline brand-hover radius-4">
                <div class="icon"><i class="material-icons colored brand-icon">&#xE0B7;</i></div>
                <h2>Alte servicii:</h2>
                <div class="">
                          <div class="desc">
                              <p>
                                  <input type="checkbox" name="other_services" value="1000">Transfer(migrare) baze de date<br>
                              </p>
                          </div>
                      </div><!-- /.featured-item -->
                
            </div>
            <div class="row featured-item hover-outline brand-hover radius-4">
                <div class="icon"><i class="material-icons colored brand-icon">&#xE0B7;</i></div>
                <h2>SEO Si Promovare Web:</h2>
                <div class="">
                          <div class="desc">
                              <p>
                                  <input type="checkbox" name="seo[meta_tag]" value="100">Optimizare metatag-uri si alte elemente de baza.<br>
                                  <input type="checkbox" name="seo[search_engine_optimization]" value="50">Inscriere in diferitele motoare de cautare<br>
                                  <input type="checkbox" name="seo[press_releases]" value="500">Articole in ziare/pe diverse site-uri(publicitate)<br>
                                  <input type="checkbox" name="seo[press_releases]" value="100">Reclama contextuala<br>
                              </p>
                          </div>
                      </div><!-- /.featured-item -->
                
            </div>
            <div class="row featured-item hover-outline brand-hover radius-4">
                <div class="icon"><i class="material-icons colored brand-icon">&#xE0B7;</i></div>
                <h2>Social:</h2>
                <div class="">
                          <div class="desc">
                              <p>
                                  <input type="checkbox" name="social[facebook]" value="50">Facebook Page<br>
                                  <input type="checkbox" name="social[other_social]" value="50">Alt tip de integrare sociala:<br>
                                  <textarea name="other_social" rows="40"></textarea>
                              </p>
                          </div>
                      </div><!-- /.featured-item -->
                
            </div>
              <button type="submit" name="submit" class="waves-effect waves-light btn submit-button mt-30">Send Request</button>
          </div>
        </section>

        </form>


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
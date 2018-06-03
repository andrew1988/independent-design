 <!-- Top bar -->
        <div class="top-bar dark-bg lighten-2 visible-md visible-lg">
          <div class="container">
            <div class="row">
              <!-- Social Icon -->
              <div class="col-md-6">
                <!-- Social Icon -->
                <ul class="list-inline social-top tt-animate btt">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>

              <div class="col-md-6 text-right">
                <ul class="topbar-cta no-margin">
                  <li class="mr-20">
                    <a><i class="material-icons mr-10">&#xE0B9;</i>info@matrox.com</a>
                  </li>
                  <li>
                    <a><i class="material-icons mr-10">&#xE0CD;</i> +04 0735171030</a>
                  </li>
                </ul>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.top-bar -->


        <!--header start-->
        <header id="header" class="tt-nav nav-border-bottom">

            <div class="header-sticky light-header ">

                <div class="container">

                    <div class="search-wrapper">
                        <div class="search-trigger pull-right">
                            <div class='search-btn'></div>
                            <i class="material-icons">&#xE8B6;</i>
                        </div>

                        <!-- Modal Search Form -->
                        <i class="search-close material-icons">&#xE5CD;</i>
                        <div class="search-form-wrapper">
                            <form action="#" class="white-form">
                                <div class="input-field">
                                    <input type="text" name="search" id="search">
                                    <label for="search" class="">Search Here...</label>
                                </div>
                                <button class="btn pink search-button waves-effect waves-light" type="submit"><i class="material-icons">&#xE8B6;</i></button>

                            </form>
                        </div>
                    </div><!-- /.search-wrapper -->

                    <div id="matrox-menu" class="menuzord">

                        <!--logo start-->
                        <a href="<?php echo base_url() ?>" class="logo-brand">
                            <img src="assets/img/corporate/logo.png" alt="" >
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu pull-right">

                            <li  <?php if($page == 'home')  {echo 'class="active"';}  ?> ><a href="<?php echo base_url() ?>">Home</a></li> 
                            <li  <?php if($page == 'about-us')  {echo 'class="active"';}  ?> ><a href="about-us">About Us</a></li>
                            <li  <?php if($page == 'services')  {echo 'class="active"';}  ?> ><a href="services">Services</a></li>
                            <li  <?php if($page == 'price-calculator')  {echo 'class="active"';}  ?>><a href="price-calculator">Price Calculator</a></li>
                            <li ><a href="<?php echo base_url().'/blog' ?>">Blog</a></li>
                            <li  <?php if($page == 'contact')  {echo 'class="active"';}  ?>><a href="contact">Contact</a></li>

                        </ul>
                        <!--mega menu end-->

                    </div>
                </div>
            </div>
        </header>
        <!--header end-->

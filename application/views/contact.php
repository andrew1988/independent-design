        <!--page title start-->
        <section class="page-title page-title-bg page-title-center ptb-90">
            <div class="container">
                <h2 class="text-bold white-text font-40">Contact Us</h2>
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </section>
        <!--page title end-->


        <!-- contact-form-section -->
        <section class="section-padding">
          
          <div class="container">
            <div class="row">

                <div class="col-md-8">
                    <form name="contact-form" id="contactForm" action="<?php echo base_url('send_message') ?>" method="POST">

                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input type="text" name="name" class="validate" id="name">
                            <label for="name">Name</label>
                          </div>

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div class="input-field">
                            <label class="sr-only" for="email">Email</label>
                            <input id="email" type="email" name="email" class="validate" >
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="phone" type="tel" name="phone" class="validate" >
                            <label for="phone">Phone Number</label>
                          </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="web" type="text" name="web" class="validate" >
                            <label for="website">Your Website</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <div class="input-field">
                        <textarea name="message" id="message" class="materialize-textarea" ></textarea>
                        <label for="message">Message</label>
                      </div>

                      <button type="submit" name="submit" class="waves-effect waves-light btn submit-button mt-30">Send Message</button>
                    </form>
                </div><!-- /.col-md-8 -->

                <div class="col-md-4 contact-info">

                    <address>
                      <i class="material-icons brand-color">&#xE8B4;</i>
                      <div class="address">
                        1355 Market Street, Suite 900<br>
                        San Francisco, CA 94103

                        <hr>

                        <p>Hoffman Parkway, P.O Box 154 Mountain View.<br>
                        United States of America.</p>
                      </div>

                      <i class="material-icons brand-color">&#xE61C;</i>
                      <div class="phone">
                        <p>Fax: (123) 456-7890<br>
                        Phone: (123) 456-7890</p>
                      </div>

                      <i class="material-icons brand-color">&#xE0B7;</i>
                      <div class="mail">
                        <p><a href="mailto:#">first.last@example.com</a><br>
                        <a href="#">www.yourdomain.com</a></p>
                      </div>
                    </address>
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
          </div>

        </section>
        <!-- contact-form-section End -->
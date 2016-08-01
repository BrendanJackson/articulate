<!-- contact begins -->
<section id="page-contact" class="page-contact">
    <div class="container">
        <header class="section-header">
            <h2 class="section-title"><span>Contact</span></h2>
            <div class="spacer"></div>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, id iusto oportere mel. </p>
        </header>
        <div class="row">
            <div class="col-sm-5 contact-info">
                <h3>Contact Info</h3>

                <?php
                if (defined('config::site_address')){
                    if(!empty(\config::site_address)){ /*site_address_2 site_city site_state*/
                        echo "<p><i class='fa fa-map-marker'></i> " . \config::site_address . " " .\config::site_address_2 . "</p>";
                        echo "<p>" . "&nbsp; &nbsp; " . \config::site_city . " " . \config::site_state . " " . \config::site_zip . " " . "</p>";
                    }
                }
                ?>
                <?php
                if (defined('config::site_phone')){
                    if(!empty(config::site_phone)){
                        echo "<p><i class='fa fa-phone'></i> " . config::site_phone. "</p>";
                    }
                }
                ?>
                <?php
                if (defined('config::site_email')){
                    if(!empty(config::site_email)){
                        echo "<p><i class='fa fa-envelope-o'></i> " . config::site_email . "</p>";
                    }
                }
                ?>
            </div>

            <div class="col-sm-7">
                <h3>Get in Touch</h3>
                <form  class="form-horizontal" id="contact-form" action="MAILTO:<?=\config::site_email?>" method="post" enctype="text/plain">
                    <div class="control-group">
                        <label class="control-label" for="name">Name</label>
                        <div class="controls">
                            <input type="text" name="name" id="name" placeholder="Your name" class="form-control input-lg ">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="email">Email Address</label>
                        <div class="controls">
                            <input type="text" name="email" id="email" placeholder="Your email address" class="form-control input-lg">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="message">Message</label>
                        <div class="controls">
                            <textarea name="message" id="message" rows="8" class="form-control input-lg"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-default btn-lg btn-block">Submit Message</button>
                    </div>
                </form><!-- End contact-form -->
            </div>
        </div><!-- End row -->

    </div>
</section> <!-- contact ends -->


<script src="<?=$assetfolder?>js/jquery-1.10.2.min.js"></script>
<script src="<?=$assetfolder?>js/bootstrap.min.js"></script>
<script src="<?=$assetfolder?>js/jquery.scrollTo.js"></script>
<script src="<?=$assetfolder?>js/jquery.nav.js"></script>
<script src="<?=$assetfolder?>js/jquery.sticky.js"></script>
<script src="<?=$assetfolder?>js/jquery.easypiechart.min.js"></script>
<script src="<?=$assetfolder?>js/jquery.vegas.min.js"></script>
<script src="<?=$assetfolder?>js/jquery.isotope.min.js"></script>
<script src="<?=$assetfolder?>js/jquery.magnific-popup.min.js"></script>
<script src="<?=$assetfolder?>js/jquery.validate.js"></script>
<script src="<?=$assetfolder?>js/waypoints.min.js"></script>
<script src="<?=$assetfolder?>js/main.js"></script>
<!--
-->
</body>
</html>

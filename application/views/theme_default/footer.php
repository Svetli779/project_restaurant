
    <footer id="footer"><!--Footer-->
        <div class="footer-top"></div>
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2"></div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <p><a href="<?= base_url();?>">Home</a></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <p><a href="<?= base_url();?>Category/">Shop</a></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <p><a href="<?= base_url();?>Contact/">Contact</a></p>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <p><a href="<?= base_url();?>About/">About</a></p>
                            </div>
                        </div>
                    <?php if($user=$this->session->userdata('username')):?>
                        <div class="col-sm-2">
                            <div class="single-widget">
                                <p><a href="<?= base_url();?>Account/user_information/">Account</a></p>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <p class="pull-left">Copyright © 2016 Design Studio Inc. All rights reserved.</p>
                    </div>
                </div>
        </div>
    </footer><!--/Footer-->

    <script type="text/javascript" src="<?= base_url();?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?= base_url();?>/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>/js/jquery.scrollUp.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>/js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="<?= base_url();?>/js/jquery.validate.js"></script>
    <script type="text/javascript" src="<?= base_url();?>/js/main.js"></script>
    <script type="text/javascript" src="<?= base_url();?>/js/main_validation.js"></script>
</body>
</html>

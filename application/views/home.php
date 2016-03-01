<section id="slider"><!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>E</span>-RESTAURANT</h1>
                                <h2>First Interactive Restaurant</h2>
                                <p>With us you could try real Italian pizza and pasta,cooked in an old Italian recipe!</p>
                            </div>
                            <div class="col-sm-6">
                                <img style="width: 460px;height: 300px;" src="images/slide1.jpg" class="girl img-responsive" alt="" />
                            </div>
                        </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-RESTAURANT</h1>
                                    <h2>First Interactive Restaurant</h2>
                                    <p>We present you our new menu with special offers for you and amazing culinary delights!</p>
                                </div>
                                <div class="col-sm-6">
                                    <img style="width: 460px;height: 300px;" src="images/slide.jpg" class="girl img-responsive" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-RESTAURANT</h1>
                                    <h2>First Interactive Restaurant</h2>
                                    <p>Enjoy the moment with selected for you meals and come again!</p>
                                </div>
                                <div class="col-sm-6">
                                    <img style="width: 460px;height: 300px;" src="images/slide2.jpg" class="girl img-responsive" alt="" />
                                </div>
                            </div>

                    </div>
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                </div>
            </div>
        </div>
    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-products-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="<?= base_url();?>Category/products/appetizers/">
                                            Appetizers
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="<?= base_url();?>Category/products/salads/">
                                            Salads
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="<?= base_url();?>Category/products/soups/">
                                            Soups
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href=<?= base_url();?>Category/products/main_dishes/">
                                            Main Dishes
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="<?= base_url();?>Category/products/desserts/">
                                            Desserts
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="<?= base_url();?>Category/products/alcoholik_drinks/">
                                            Alcoholic drinks
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="<?= base_url();?>Category/products/soft_drinks/">
                                            Soft drinks
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div><!--/category-products-->
                    </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">THE RESTAURANT</h2>
                    <div class="col-sm-6">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/welcome.png" alt="" />
                                    <h2>MAIN HALL</h2>
                                    <p style="text-align: justify;">Here you can enjoy a relaxing and romantic dinner with a loved one, business lunch, meeting with friends!
                                       Try our cuisine, prepared with love our delicious meals and our aplenty lunch menu every day.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/gradina.jpg" alt="" />
                                    <h2>THE GARDEN</h2>
                                    <p style="text-align: justify;">From May to October in the cool and colorful, wild atmosphere You expect good food at very 
                                       affordable prices. Whole summer will tempt you with a variety of and tasty lunch menu every day.Welcome!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--features_items-->
                <div class="recommended_items"><!--Coming soon-->
                    <h2 class="title text-center">Coming soon</h2>
                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                    <div class="item active">	
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img style="width: 100%; height: 130px;" src="images/page1_img1.jpg" alt="" />
                                                        <h2>Healthy Advice</h2>
                                                        <p>Cut down on saturated fat and sugar</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img style="width: 100%; height: 130px;" src="images/page1_img2.jpg" alt="" />
                                                        <h2>Healthy Advice</h2>
                                                        <p>Eat less salt</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img style="width: 100%; height: 130px;" src="images/page1_img3.jpg" alt="" />
                                                        <h2>Healthy Advice</h2>
                                                        <p>Base your meals on starchy foods</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="item">	
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img style="width: 100%; height: 130px;" src="images/page1_img4.jpg" alt="" />
                                                    <h2>Healthy Advice</h2>
                                                    <p>Eat lots of fruit and vegetables</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img style="width: 100%; height: 130px;" src="images/page1_img5.jpg" alt="" />
                                                    <h2>Healthy Advice</h2>
                                                    <p>Get active and be a healthy weight</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img style="width: 100%; height: 130px;" src="images/page1_img3.jpg" alt="" />
                                                    <h2>Healthy Advice</h2>
                                                    <p>Eat more fish</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>			
                        </div>
                </div><!--/coming soon-->

            </div>
        </div>
    </div>
</section>
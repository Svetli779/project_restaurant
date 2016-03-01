	<section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="left-sidebar">
                            <h2>Category</h2>
                            <div class="panel-group category-products" id="accordian"><!--category-productsr-->
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
                                            <a href="<?= base_url();?>Category/products/main_dishes/">
                                                Main dishes
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
                            </div><!--/category-productsr-->
                        </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--found results-->
                            <h2 class="title text-center">FOUND RESULTS</h2>
                            <?php if($results != false):?>
                            <?php foreach ($results as $row):?>
                            <form action="<?= base_url();?>Cart/add/" method="POST">
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img style="width: 100%;height: 180px;" src="<?php echo base_url();?>/images/menu_pic/<?=$row->picture;?>.jpg" alt="" />
                                            <h2 class="price">PRICE : <br/><?=$row->price;?> lv.</h2>
                                            <p class="name">TITLE : <br/><?=$row->P;?></p>
                                            <input type="hidden"  name="product_id" value="<?php echo $row->product_id;?>"/>
                                            <input type="hidden" name="price" value="<?php echo $row->price;?>"/>
                                            <input type="hidden" name="name" value="<?php echo $row->P;?>"/>
                                            <?php if($user=$this->session->userdata('username')):?>
                                            <i class="fa fa-shopping-cart"></i>
                                            <input type="submit" value="add"/>
                                            <?php endif;?>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2 class="price"><?=$row->price;?></h2>
                                                <p class="name"><?=$row->P;?></p>
                                                <p>DESCRIPTION : <br/><?=$row->V;?></p> 
                                                <p>WEIGHT :<br/><?=$row->weight;?> grams</p>
                                                <?php if($user):?>
                                                <i class="fa fa-shopping-cart"></i>
                                                <input type="submit" value="add"/>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </form> 
                            <?php endforeach;?>
                            <?php else :?>
                            <div class="col-sm-1"></div>
                            <div class="col-sm-9">
                                <img style="width: 100%;height: 305px;"src="<?= base_url();?>/images/we_sorry.jpg">
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-12">
                                <div class="col-sm-offset-4">
                                    <h2 class="error">NO MATCHES FOUND  !!!</h2>
                                    <p>Please try again with another word.</p>
                                </div>
                            </div>
                            <?php endif;?>
                        </div><!--found results-->
                    </div>
                </div>
            </div>
	</section>
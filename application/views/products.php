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
										<a href="<?= base_url();?>/Category/products/appetizers/">
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
						</div><!--/category-productsr-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--products-->
                                                <?php $products_type = $this->uri->segment(3);?>
						<h2 class="title text-center"><?php echo $products_type;?></h2>
                                                <?php foreach ($results as $data):?>
                                                <form name="show_products" id="show_products" action="<?= base_url();?>Cart/add/" method="POST">
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
                                                                            <img style="width: 100%;height: 180px;"src="<?=base_url();?>images/menu_pic/<?=$data->picture;?>.jpg" alt="" />
                                                                            <h2 class="price">PRICE : <br/><?=$data->price;?> BGN.</h2>
                                                                                <p class="name"><?=$data->title_en; ?></p>
                                                                                <input type="hidden"  name="product_id" id="product_id" value="<?php echo $data->product_id;?>"/>
                                                                                <input type="hidden" name="price" id="price" value="<?php echo $data->price;?>"/>
                                                                                <input type="hidden" name="name" id="name" value="<?php echo $data->title_en;?>"/>
                                                                                <?php if($user=$this->session->userdata('username')):?>
                                                                                <i class="fa fa-shopping-cart"></i>
                                                                                <input type="submit" value="add" id="addcart"/>
                                                                                <?php endif;?>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
                                                                                    <h2 class="price"><?=$data->price;?></h2>
                                                                                    <p class="name"><?=$data->title_en; ?></p>
                                                                                    <p>INGREDIENTS : <br/><?=$data->description_en;?></p> 
                                                                                    <p>WEIGHT :<br/><?=$data->weight;?> grams</p>
                                                                                    <?php if($user):?>
                                                                                    <i class="fa fa-shopping-cart"></i>
                                                                                    <input type="submit" value="add" id="addcart"/>
                                                                                    <?php endif;?>
										</div>
									</div>
								</div>
							</div>
						</div>
                                                </form> 
						<?php endforeach;?>
                                                <div class="col-sm-12">
                                                    <ul class="pagination">
                                                        <li class="active">
                                                            <?php echo $links;?>
                                                        </li>
                                                    </ul>
                                                </div>
					</div><!--products-->
				</div>
			</div>
		</div>
	</section>


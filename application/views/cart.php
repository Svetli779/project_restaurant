<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="<?= base_url();?>">Home</a></li>
              <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
<?php echo form_open('/Cart/uplode/'); ?>

    <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
        <tr>
            <th>Quantity</th>
            <th>Description</th>
            <th>Price</th>
            <th>Sub-Total</th>
            <th>Remove</th>
        </tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

    <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>
            <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
            <td>
                    <?php echo $items['name']; ?>

                    <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                        <p>
                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                    <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                            <?php endforeach; ?>
                        </p>

                    <?php endif; ?>

            </td>
            <td><?php echo $this->cart->format_number($items['price']); ?></td>
            <td>BGN.<?php echo $this->cart->format_number($items['subtotal']); ?></td>
            <td class="remove"><?php echo anchor('cart/remove/'.$items['rowid'],'X'); ?></td>
        </tr>

    <?php $i++; ?>

<?php endforeach; ?>

    <tr style="color:red;">
        <td colspan="2"></td>
        <td class="left"><strong>Total</strong></td>
        <td class="left">BGN.<?php echo $this->cart->format_number($this->cart->total()); ?></td>
    </tr>

    </table>

        <p><?php echo form_submit('','Update your Cart');?></p>
			</div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
                <h3>What would you like to do next?</h3>
                <p style="color:red;">This site was created for educational purposes.Please don't buy anything!</p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="chose_area">
                    <form action="" method="POST">
                        <ul class="user_option">
                                <li>
                                    <input type="radio" name="payment" value="Credit card">
                                    <label>Use Credit Card</label>
                                </li>
                                <li>
                                    <input type="radio" name="payment" value="delivery">
                                    <label>Payment on delivery</label>
                                </li>
                                <li>
                                    <input type="radio" name="payment" value="Pay pal">
                                    <label>Use Pay Pal</label>
                                </li>
                        </ul>
                        <ul class="user_info">
                                <li class="single_field">
                                        <label>Country:</label>
                                        <select name="country">
                                            <option value="Bulgaria">Bulgaria</option>
                                        </select>
                                </li>
                                <li class="single_field">
                                    <label>Region:</label>
                                        <select name="town">
                                            <option value="1">Select</option>
                                            <option value="Sofia">Sofia</option>
                                            <option value="Plovdiv">Plovdiv</option>
                                            <option value="Varna">Varna</option>
                                            <option value="Saint Vlas">Saint Vlas</option>
                                        </select>
                                </li>
                                <li class="single_field zip-field">
                                    <label>Address:</label>
                                    <input type="text" name="address">
                                </li>
                                <li style="color:red;">Cart Total:
                                    <span><?php echo $this->cart->format_number($this->cart->total()); ?></span> BGN.
                                </li>
                        </ul>
                        <input type="submit" class="btn btn-default check_out" value="Continue"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->
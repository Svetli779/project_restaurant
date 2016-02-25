
        <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="signup-form"><!--sign up form-->
						<h2>Change your personal information !</h2>
                                                <?php foreach ($result as $data):?>
                                                <form action="<?= base_url();?>Account/update_user/" id="update_form" method="POST">
                                                    <input name="username" type="text" placeholder="User Name" id="username" value="<?= $data->username;?>"/>
                                                    <?= form_error('username','<p class="error">','</p>');?>
                                                    <div id="content"></div>
                                                    <input name="firstname" type="text" placeholder="First Name" id="firstname" value="<?= $data->fname;?>"/>
                                                    <?= form_error('firstname','<p class="error">','</p>');?>
                                                    <input name="lastname" type="text" placeholder="Last Name" id="lastname" value="<?= $data->lname;?>"/>
                                                    <?= form_error('lastname','<p class="error">','</p>');?>
                                                    <input name="email" type="email" placeholder="Email" id="email" value="<?= $data->email;?>"/>
                                                    <?= form_error('email','<p class="error">','</p>');?>
                                                    <div id="content_email"></div>
                                                    <button type="submit" class="btn btn-default" id="submit_reg">Update</button>
                                                </form>
                                                <?php endforeach; ?>
                                                <p class="error"><?= $this->session->flashdata('uperror');?></p>
                                                <p class="error"><?= $this->session->flashdata('update');?></p>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

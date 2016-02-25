
        <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="signup-form"><!--sign up form-->
                                            <p class="error"><?= $this->session->flashdata('uperror');?></p>
                                            <p class="free"><?= $this->session->flashdata('update');?></p>
						<h2>To reset your password , enter your email below !</h2>
                                                <form action="<?= base_url();?>Account/reset_pass/" id="reset_pass" method="POST">
                                                    <input name="email_reset" type="email" placeholder="Email" id="email_reset"/>
                                                    <button type="submit" class="btn btn-default" id="submit_pass">Reset password</button>
                                                </form>
                                                <div id="content_mail"></div>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->


        <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="signup-form"><!--sign up form-->
						<h2>To change your password , fill in fields below !</h2>
                                                <form action="<?= base_url();?>Account/update_password/" id="update_paswword" method="POST">
                                                    <input type="password" name="old_password" placeholder="Old Password" id="old_password"/>
                                                    <input type="password" name="newpassword" placeholder="New Password" id="newpassword"/>
                                                    <input type="password" name="renewpassword" placeholder="Repeat Password" id="renewpassword"/>
                                                    <button type="submit" class="btn btn-default" id="submit_reg">Change password</button>
                                                </form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

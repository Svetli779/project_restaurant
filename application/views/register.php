
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Log in to your account</h2>
                                                <form action="<?= base_url();?>Account/login/" method="POST" id="login_form">
                                                    <input name="username_log" type="text" placeholder="User Name" id="username_log"/>
                                                    <?= form_error('username_log','<p class="error">','</p>');?>
                                                    <input name="password_log" type="password" placeholder="Password" id="password_log"/>
                                                    <?= form_error('password_log','<p class="error">','</p>');?>
                                                    <button type="submit" class="btn btn-default">Login</button>
						</form>
                                                <p class="error"><?= $this->session->flashdata('errmsg');?></p>
                                                <p class="free"><?= $this->session->flashdata('update');?></p>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Sign up!</h2>
                                                <form action="<?= base_url();?>Account/register/" id="register_form" method="POST">
                                                    <input name="username" type="text" placeholder="User Name" id="username"/>
                                                    <?= form_error('username','<p class="error">','</p>');?>
                                                    <div id="content"></div>
                                                    <input name="firstname" type="text" placeholder="First Name" id="firstname"/>
                                                    <?= form_error('firstname','<p class="error">','</p>');?>
                                                    <input name="lastname" type="text" placeholder="Last Name" id="lastname"/>
                                                    <?= form_error('lastname','<p class="error">','</p>');?>
                                                    <input name="email" type="email" placeholder="Email" id="email"/>
                                                    <?= form_error('email','<p class="error">','</p>');?>
                                                    <div id="content_email"></div>
                                                    <input name="password" type="password" placeholder="Password" id="password"/>
                                                    <?= form_error('password','<p class="error">','</p>');?>
                                                    <input name="repassword" type="password" placeholder="Repeat Password" id="repassword"/>
                                                    <?= form_error('repassword','<p class="error">','</p>');?>
                                                    <button type="submit" class="btn btn-default" id="submit_reg">Sign up</button>
                                                </form>
                                                <p class="error"><?= $this->session->flashdata('errreg');?></p>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

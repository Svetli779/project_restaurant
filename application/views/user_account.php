
        <section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
                                    <div class="profile-line"><!--sign up form-->
                                        <p style="color: green;"><?= $this->session->userdata('update');?></p>
                                        <p class="error"><?= $this->session->flashdata('uperror');?></p>
                                        <p style="color: green;"><?= $this->session->flashdata('update_pass');?></p>
                                            <div>
						<h2>Your personal information <?= $this->session->userdata('username');?> !</h2>
                                                <a href="<?= base_url();?>/Account/change_password/">Change your password !</a>
                                            </div>
                                        
                                            <?php foreach ($result as $data):?>
                                                <div class="step-one">
                                                    <h2 class="heading">User Name:&nbsp;<?= $data->username;?></h2>
                                                </div> 
                                                <div class="step-one">
                                                    <h2 class="heading">First Name:&nbsp;<?= $data->fname;?><h2>
                                                </div>            
                                                <div class="step-one">
                                                    <h2 class="heading">Last Name:&nbsp;<?= $data->lname;?></h2>
                                                </div>
                                                <div class="step-one">
                                                    <h2 class="heading">Email Address:&nbsp;<?= $data->email;?></h2>
                                                </div>
                                                <a href="<?= base_url();?>Account/show_user/" class="btn btn-primary">Change your account !</a>&nbsp;
                                                <a href="<?= base_url();?>Account/del_user/" class="btn btn-primary" style="background-color: red;">Delete your account !</a>
                                            <?php endforeach; ?>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

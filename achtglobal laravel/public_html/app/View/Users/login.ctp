<?php 

$website_logo = $website['image'] ? "images/".$website['image'] : 'default/images/logo.png';
/*
?>
 
    <div class="login-wrapper">

      <a href="<?php echo $this->webroot;?>">
	   <img width="60%" src="<?php echo $website_logo;?>" /> 
	 <h1> Admin Panel </h1>
	  </a>

        <?php echo $this->Form->create('User', ['url' => ['action' => 'login']]); ?>

        <div class="form-group">

          <div class="input-group">

            <span class="input-group-addon"><i class="icon-envelope"></i></span><input class="form-control" placeholder="Username or Email" name="data[User][username]" type="text">

          </div>

        </div>

        <div class="form-group">

          <div class="input-group">

            <span class="input-group-addon"><i class="icon-lock"></i></span><input class="form-control" placeholder="Password" name="data[User][password]" type="password">

          </div>

        </div>

        

        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in">

        

      <?php echo $this->Form->end(); ?>

      
    </div>

 */ ?>
 
	<!-- wrapper -->
	<div class="wrapper">  
 		  
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
				 
				 	<div class="row">
						<div class="col-12 col-lg-3"></div>						
						<div class="col-12 col-lg-6">
							<div class="card radius-15">
								<div class="card-body">
									<div class="card-title text-center"> <i class='bx bxs-user-circle text-primary font-60'></i>
										<h3 class="mb-5 mt-3 text-primary">Login</h3>
									</div>
									<hr/>
									
									<?php echo $this->Form->create('User', ['url' => ['action' => 'login']]); ?>									
									<?php echo $this->Session->flash(); ?>
									<div class="form-group">
										<label>Enter Username</label>
										<input type="text" name="data[User][username]" required class="form-control form-control-lg radius-30" placeholder="Enter your Username" />
									</div>
									<div class="form-group">
										<label>Enter Password</label>
										<input type="password"  name="data[User][password]" required class="form-control form-control-lg radius-30" placeholder="Enter your Password" />
									</div>
								 
									<button type="submit" class="btn btn-primary btn-lg px-5 radius-30 btn-block"><i class='bx bx-lock-alt'></i> Login</button>
									<?php echo $this->Form->end(); ?>

								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3"></div> 
					</div>
					<!--end row-->
				 
				</div>
			</div>
			<!--end page-content-wrapper-->
	 
	</div>
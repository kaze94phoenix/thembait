  <div id="login-page">
	  	<div class="container">
	  	
		      
                          <?php echo $this->Session->flash('auth'); ?>
                          <?php echo $this->Form->create('User',array('class'=>'form-login'));?>
                            <div class="form-group">
                                
                            </div>
                            <div class="form-group">
                                 
                            </div>
                            
                        
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <?php echo $this->Form->input('username',array('type'=>'text','class'=>'form-control','placeholder'=>'Enter username'));?>
		            <br>
		            <?php echo $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Enter password', 'type'=>'password'));?>
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		
		                </span>
		            </label>
		            <?php echo $this->Form->submit('Login', array('class'=>'btn btn-theme btn-block'));?><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		            <div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="#">
		                    Create an account
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		<?php echo $this->Form->end();?>
		      	
	  	
	  	</div>
	  </div>
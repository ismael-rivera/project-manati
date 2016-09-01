<div class="container wrapper content" id="create-project-form-wrapper">
    <div class="grid" id="create-project-form">
    	<div class="row form">
    		<div class="col-md-12">
            		<div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
						<?php if(is_array($validation_errors) === true){
							foreach($validation_errors as $verror){
								echo $verror;
							}
						}?>
                        </div>
                        <div class="col-md-4"></div>
                	</div>
      			<?php $attributes = array('class' => 'form-horizontal', 'id' => 'login-user-form'); ?>
                <?php echo form_open('login/process_form_login', $attributes); ?>
 					<div class="row">
            			<div class="col-md-3"></div>
                        <div class="col-md-2">
                                <label for="inputLoginEmailUsername" class="col-sm-3 control-label">Email/Username</label>
                        </div> 
                        <div class="col-md-4">
                               
                                <input type="text" name="email_username" class="form-control" id="inputLoginEmailUsername" placeholder="Email/Username">
                        </div>
                        <div class="col-md-3"></div>
        			</div>    
        			<div class="row">  
                        <div class="col-md-3"></div>  
                        <div class="col-md-2">        
                                <label for="inputLoginPassword" class="col-sm-3 control-label">Password</label>
                        </div>
                        <div class="col-md-4">        
                                <input type="password" name="password" class="form-control" id="inputLoginPassword" placeholder="Password">
                                <p class="help-block">Can't remember your passord? <a href="#">Click Here</a>.</p>
                        </div>
                        <div class="col-md-3"></div>
  	    			</div>
                    <div class="row"> 
                        <div class="col-md-5"></div> 
                        <div class="col-md-1"><button type="submit" class="btn btn-default">Login</button></div>
                        <div class="col-md-5"></div>  
  	    			</div>
        		</form>
       		</div> 
    	</div>   
    </div>
</div>

          
        
            
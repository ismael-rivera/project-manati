<div class="container wrapper content" id="register-wrapper">
    <div class="grid" id="register"> 
        <div class="row form">
                <div class="col-md-4"></div>
                <div class="col-md-4"><h2>Create an Account</h2></div>
                <div class="col-md-4"></div>   		
        </div>        
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
                </div><!--col12 -->
        </div><!--row-->                  
        <?php $attributes = array('class' => 'form-horizontal', 'id' => 'register-user-form'); ?>
        <?php echo form_open('signup/process_form_signup', $attributes); ?>
        <div class="row">
        		<div class="col-md-3 errors"></div>
                <div class="col-md-2 lbl-col">
                        <label for="inputFirstName" class="control-label">First Name</label>
                </div> 
                <div class="col-md-4">       
              			<input type="text" name="firstname" value="<?php echo $this->input->post('firstname'); ?>" class="form-control" id="ru-input-name-first" placeholder="First Name">
                </div>
                <div class="col-md-3"></div>
        </div>
        <div class="row">
        		<div class="col-md-3"></div>
                <div class="col-md-2 lbl-col">
                        <label for="inputLastName" class="control-label">Last Name</label>
                </div> 
                <div class="col-md-4">       
                        <input type="text" name="lastname" value="<?php echo $this->input->post('lastname'); ?>" class="form-control" id="ru-input-name-last" placeholder="Last Name">
                </div>
                <div class="col-md-3"></div>
        </div>
        <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-2 lbl-col">
                        <label for="labelEmail" class="control-label">Email</label>
                </div> 
                <div class="col-md-4">       
                        <input type="email" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="ru-input-name-email" placeholder="Email">
                </div>
                <div class="col-md-3"></div>
        </div>  
 		<div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-2 lbl-col">
                        <label for="Username" class="control-label">Username</label>
                </div> 
                <div class="col-md-4">       
                        <input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="ru-input-username" placeholder="Username">
                </div>
                <div class="col-md-3"></div>
        </div>    
        <div class="row">  
                <div class="col-md-3"></div>  
                <div class="col-md-2 lbl-col">        
                        <label for="inputPassword" class="control-label">Password</label>
                </div>
                <div class="col-md-4">        
                        <input type="password" name="password" class="form-control" id="ru-input-password" placeholder="Password">
                        <p class="help-block">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col-md-3"></div>
  	    </div>
                    <div class="row">  
                        <div class="col-md-3"></div>  
                        <div class="col-md-2 lbl-col">        
                                <label for="inputPassConf" class="control-label">Verify Password</label>
                        </div>
                        <div class="col-md-4">        
                                <input type="password" name="passconf" class="form-control" id="ru-input-password-veri" placeholder="Verify Password">
                                <p class="help-block">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="col-md-3"></div>
  	    			</div> 
                    <div class="row"> 
                        <div class="col-md-5"></div> 
                        <div class="col-md-1"><input type="submit" id="ru-register-submit" class="btn btn-default" value="Register"/></div>
                        <div class="col-md-5"></div>  
  	    			</div>
        		</form>   
       		 
    </div><!--grid-->
</div><!--wrapper-->

          
    
            
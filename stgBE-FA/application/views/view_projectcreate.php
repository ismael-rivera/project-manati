<div class="container wrapper content" id="project-create-wrapper">
    <div class="grid" id="project-create"> 
    <div class="row form-group">
    		<div class="col-md-4"></div>
    		<div class="col-md-4"><h2>Create a Project</h2></div>
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
                <?php $attributes = array('class' => 'form-horizontal', 'id' => 'project-create-form'); ?>
                <?php echo form_open('projectcreate/process_form_projcreate', $attributes); ?>
            </div><!--col12 -->
    </div><!--row-->    
<fieldset>
<legend>Project Type</legend>
<div class="row form-group">
  <div class="col-md-4 lbl-col">
	<label class="control-label" for="project_type">Payment Rate Method</label>
  </div>
  <div class="col-md-4">
    <select id="project_type" name="project_type" class="form-control">
      <option value="hourly">Hourly Rate Project</option>
      <option value="fixed">Fixed Fee Project</option>
    </select>
    <span class="help-block">Please specify the rate of payment you wish to address to this project's professionals.</span>
  </div>
  <div class="col-md-4"></div>
</div>

<!-- Text input-->
<div class="row form-group">
  <div class="col-md-4 lbl-col">
  <label class="control-label" for="project_title">Project Title</label>
  </div>  
  <div class="col-md-6">
  <input id="project_title" name="project_title" type="text" placeholder="title of project" class="form-control" required="">
  <span class="help-block">Keep it short but descriptive. There will be plenty of opportunity to describe the project on the fields below.</span>  
  </div>
  <div class="col-md-2"></div>
</div>

</fieldset>
<fieldset>
<!-- Multiple Checkboxes -->
<div class="row form-group">
  <div class="col-md-4 lbl-col">	
  <label class="control-label" for="project_category">Project Categories</label>
  <span class="help-block">Assing One or More Categories for Your Project</span>  
  </div>
  <div class="col-md-4">
      <div id="h1" class="checkbox"><ul><!--Category List Printed Here--></ul></div>
  </div>
  <div class="col-md-4">
  	  <div id="h2" class="checkbox"><ul><!--Category List Printed Here--></ul></div>
  </div>   
</div>


<!-- Textarea -->
<div class="row form-group">
  <div class="col-md-4 lbl-col">
  <label class="control-label" for="project_description">Project Specifics</label>
  </div>
  <div class="col-md-4">                     
    <textarea class="form-control" id="project_description" name="project_description">describe your project</textarea>
  </div>
</div>

<!-- File Button --> 
<div class="row form-group">
  <div class="col-md-4 lbl-col">
    <label class="control-label" for="fupload_file">Upload Project Files</label>
  </div>
  <div class="col-md-4">
    <input id="fupload_file" name="fupload_file" class="input-file" type="file">
    <span class="help-block">File size cannot be larger than ____</span>
  </div>
  <div class="col-md-4"></div>
</div>



<!-- Select Basic -->
<div class="row form-group">
  <div class="col-md-4 lbl-col">
    <label class="control-label" for="budget_range">Project Budget Range (PBR)</label>
  </div>
  <div class="col-md-4">
    <select id="budget_range" name="budget_range" class="form-control">
      <option value='mini'>$15-$50 (USD)</option>
	  <option value='lite'>$50-$200 (USD)</option>
	  <option value='small'>$200-700 (USD)</option>
	  <option value='medium'>$700-1500 (USD)</option>
	  <option value='big'>$1500-3000 (USD)</option>
	  <option value='huge'>$3000-6000 (USD)</option>
	  <option value='super'>$6000 and $10000 (USD)</option>
      <option value='massive'>$10000 and up (USD)</option>
    </select>
  </div>
  <div class="col-md-4"></div>
</div>

<!-- Select Basic -->
<div class="row form-group">
  <div class="col-md-4 lbl-col">
  <label class="control-label" for="daysforbidding">Days for Bidding</label>
  </div>
  <div class="col-md-4">
    <select id="daysforbidding" name="daysforbidding" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="1">6</option>
      <option value="2">7</option>
      <option value="3">8</option>
      <option value="4">9</option>
      <option value="5">10</option>
      <option value="1">11</option>
      <option value="2">12</option>
      <option value="3">13</option>
      <option value="4">14</option>
      <option value="5">15</option>
    </select>
  </div>
</div>

<!-- Multiple Radios -->
<div class="row form-group">
  <div class="col-md-4 lbl-col">
    <label class="control-label" for="project_level">Choose Project Level</label>
  </div>
  <div class="col-md-4">
  <div class="radio">
    <label for="project_level-0">
      <input type="radio" name="project_level" id="project_level-0" value="1" checked="checked">
      Normal
    </label>
  </div>
  <div class="radio">
    <label for="project_level-1">
      <input type="radio" name="project_level" id="project_level-1" value="2">
      Premium
    </label>
	</div>
  <div class="radio">
    <label for="project_level-2">
      <input type="radio" name="project_level" id="project_level-2" value="3">
      Signature
    </label>
	</div>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="row form-group">
  <div class="col-md-4 lbl-col">
  <label class="control-label" for="additional_options">Additional Options</label>
  </div>
  <div class="col-md-8">
      <div class="checkbox">
        <label for="additional_options-0">
          <input type="checkbox" name="additional_options" id="additional_options-0" value="1">
          Hide projects bids from other users. To view bids project creator must login.
        </label>
      </div>
      <div class="checkbox">
        <label for="additional_options-1">
          <input type="checkbox" name="additional_options" id="additional_options-1" value="2">
          Allow only premium members to bid on my project.
        </label>
      </div>
      <div class="checkbox">
        <label for="additional_options-2">
          <input type="checkbox" name="additional_options" id="additional_options-2" value="3">
          Hide project information from search engines and unregistered users ($1 cost).
        </label>
      </div>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="row form-group">
  <div class="col-md-4 lbl-col">
  <label class="control-label" for="agree_check">User Agreement</label>
  </div>
  <div class="col-md-6">
      <div class="checkbox">
            <label for="agree_check-0">
              <input type="checkbox" name="agree_check" id="agree_check-0" value="Agree">
              I have read and agree to the project guidelines
            </label>
            <span class="help-block">If you haven't read the project guidelines yet, we recommend you do so.</br>Please Click Here. Do not worry. You will not loose the info on your form as the link provided will open a new window.</span>
      </div>      
  </div>
  <div class="col-md-2"></div>
</div>
<div class="row"> 
     <div class="col-md-5"></div> 
     <div class="col-md-1"><input type="submit" id="cp-register-submit" class="btn btn-default" value="Submit To Create Project"/></div>
     <div class="col-md-5"></div>  
</div>
</fieldset>
<?php echo form_close(); ?>
   
       		  
    </div><!--grid-->
</div><!--wrapper-->

          
    
            
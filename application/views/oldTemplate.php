
<div class="container">
  <div class="row">


<?php
  $attributes = array('id' => 'lead_form',
                      'class' => 'well form-horizontal');

 echo form_open('dashboard/formtest', $attributes); 
 ?>
<!--     <form class="well form-horizontal" action=" " method="post"  id="lead_form">
 -->

<fieldset>

<!-- Form Name -->
<legend>Create Lead</legend>

<!-- Text input-->
<?php echo form_error('typeHousingRequest', '<div class="input-group">', '</div>'); ?>
<div class="form-group">
  <label class="col-md-6 control-label">Type of Housing Request</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <p>Envelope icon: <span class="glyphicon glyphicon-envelope"></span></p> 
  <input name="typeHousingRequest" value="<?php echo set_value('typeHousingRequest'); ?>" placeholder="Type of Housing Request" class="form-control" type="text">
    </div>
  </div>
</div>

<?php echo form_error('contactName'); ?>
<div class="form-group">
  <label class="col-md-6 control-label">Contact Name</label>  
  <div class="col-md-6 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="contactName" value="<?php echo set_value('contactName'); ?>" placeholder="Contact Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<?php echo form_error('email'); ?>

       <div class="form-group">
  <label class="col-md-6 control-label">E-Mail</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" value="<?php echo set_value('email'); ?>" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
<?php echo form_error('phone'); ?>

<div class="form-group">
  <label class="col-md-6 control-label">Phone #</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" value="<?php echo set_value('phone'); ?>" placeholder="(000) 000-0000" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<?php echo form_error('clientName'); ?>

<div class="form-group">
  <label class="col-md-6 control-label" >Client Name</label> 
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="clientName" value="<?php echo set_value('clientName'); ?>" placeholder="Client Name" class="form-control"  type="text">
    </div>
  </div>
</div>


<?php echo form_error('companyName'); ?>

<div class="form-group">
  <label class="col-md-6 control-label">Company Name</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="companyName" value="<?php echo set_value('companyName'); ?>" placeholder="Company Name" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->
<?php echo form_error('state'); ?>

   
<div class="form-group"> 
  <label class="col-md-6 control-label">State</label>
    <div class="col-md-6 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option value="Alabama" <?php echo  set_select('state', 'Alabama'); ?> >Alabama</option>
      <option value="Alaska" <?php echo  set_select('state', 'Alaska'); ?> >Alaska</option>
      <option value="Arizona" <?php echo  set_select('state', 'Arizona'); ?> >Arizona</option>
      <option value="Arkansas" <?php echo  set_select('state', 'Arkansas'); ?> >Arkansas</option>
      <option value="California" <?php echo  set_select('state', 'California'); ?> >California</option>
      <option value="Colorado" <?php echo  set_select('state', 'Colorado'); ?> >Colorado</option>
      <option value="Connecticut" <?php echo  set_select('state', 'Connecticut'); ?> >Connecticut</option>
      <option value="Delaware" <?php echo  set_select('state', 'Delaware'); ?> >Delaware</option>
      <option value="District of Columbia" <?php echo  set_select('state', 'District of Columbia'); ?> >District of Columbia</option>
      <option value="Florida" <?php echo  set_select('state', 'Florida'); ?> >Florida</option>
      <option value="Georgia" <?php echo  set_select('state', 'Georgia'); ?> >Georgia</option>
      <option value="Hawaii" <?php echo  set_select('state', 'Hawaii'); ?> >Hawaii</option>
      <option value="Idaho" <?php echo  set_select('state', 'Idaho'); ?> >Idaho</option>
      <option value="Illinois" <?php echo  set_select('state', 'Illinois'); ?> >Illinois</option>
      <option value="Indiana" <?php echo  set_select('state', 'Indiana'); ?> >Indiana</option>
      <option value="Iowa" <?php echo  set_select('state', 'Iowa'); ?> >Iowa</option>
      <option value="Kansas" <?php echo  set_select('state', 'Kansas'); ?> >Kansas</option>
      <option value="Kentucky" <?php echo  set_select('state', 'Kentucky'); ?> >Kentucky</option>
      <option value="Louisiana" <?php echo  set_select('state', 'Louisiana'); ?> >Louisiana</option>
      <option value="Maine" <?php echo  set_select('state', 'Maine'); ?> >Maine</option>
      <option value="Maryland" <?php echo  set_select('state', 'Maryland'); ?> >Maryland</option>
      <option value="Massachusetts" <?php echo  set_select('state', 'Massachusetts'); ?> >Massachusetts</option>
      <option value="Michigan" <?php echo  set_select('state', 'Michigan'); ?> >Michigan</option>
      <option value="Minnesota" <?php echo  set_select('state', 'Minnesota'); ?> >Minnesota</option>
      <option value="Mississippi" <?php echo  set_select('state', 'Mississippi'); ?> >Mississippi</option>
      <option value="Missouri" <?php echo  set_select('state', 'Missouri'); ?> >Missouri</option>
      <option value="Montana" <?php echo  set_select('state', 'Montana'); ?> >Montana</option>
      <option value="Nebraska" <?php echo  set_select('state', 'Nebraska'); ?> >Nebraska</option>
      <option value="Nevada" <?php echo  set_select('state', 'Nevada'); ?> >Nevada</option>
      <option value="Hampshire" <?php echo  set_select('state', 'New Hampshire'); ?> >New Hampshire</option>
      <option value="New Jersey" <?php echo  set_select('state', 'New Jersey'); ?> >New Jersey</option>
      <option value="New Mexico" <?php echo  set_select('state', 'New Mexico'); ?> >New Mexico</option>
      <option value="New York" <?php echo  set_select('state', 'New York'); ?> >New York</option>
      <option value="North Carolina" <?php echo  set_select('state', 'North Carolina'); ?> >North Carolina</option>
      <option value="North Dakota" <?php echo  set_select('state', 'North Dakota'); ?> >North Dakota</option>
      <option value="Ohio" <?php echo  set_select('state', 'Ohio'); ?> >Ohio</option>
      <option value="Oklahoma" <?php echo  set_select('state', 'Oklahoma'); ?> >Oklahoma</option>
      <option value="Oregon" <?php echo  set_select('state', 'Oregon'); ?> >Oregon</option>
      <option value="Pennsylvania" <?php echo  set_select('state', 'Pennsylvania'); ?> >Pennsylvania</option>
      <option value="Rhode Island" <?php echo  set_select('state', 'Rhode Island'); ?> >Rhode Island</option>
      <option value="South Carolina" <?php echo  set_select('state', 'South Carolina'); ?> >South Carolina</option>
      <option value="South Dakota" <?php echo  set_select('state', 'South Dakota'); ?> >South Dakota</option>
      <option value="Tennessee" <?php echo  set_select('state', 'Tennessee'); ?> >Tennessee</option>
      <option value="Texas" <?php echo  set_select('state', 'Texas'); ?> >Texas</option>
      <option value="Utah" <?php echo  set_select('state', 'Utah'); ?> >Utah</option>
      <option value="Vermont" <?php echo  set_select('state', 'Vermont'); ?> >Vermont</option>
      <option value="Virginia" <?php echo  set_select('state', 'Virginia'); ?> >Virginia</option>
      <option value="Washington" <?php echo  set_select('state', 'Washington'); ?> >Washington</option>
      <option value="West Virginia" <?php echo  set_select('state', 'West Virginia'); ?> >West Virginia</option>
      <option value="Wisconsin" <?php echo  set_select('state', 'Wisconsin'); ?> >Wisconsin</option>
      <option value="Wyoming" <?php echo  set_select('state', 'Wyoming'); ?> >Wyoming</option>
    </select>
  </div>
</div>
</div>

<!-- Text input-->
<?php echo form_error('address'); ?>

<div class="form-group">
  <label class="col-md-6 control-label">Address</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" value="<?php echo set_value('address'); ?>" placeholder="Address" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<?php echo form_error('moveInDate'); ?>

<div class="form-group">
  <label class="col-md-6 control-label">Move-In Date</label>  
    <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="moveInDate" value="<?php echo set_value('moveInDate'); ?>" placeholder="00/00/0000" class="form-control"  type="text">
    </div>
</div>
</div>

<!-- Text input-->
<?php echo form_error('moveOutDate'); ?>

<div class="form-group">
  <label class="col-md-6 control-label">Move-Out Date</label>  
   <div class="col-md-6 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="moveOutDate" value="<?php echo set_value('website'); ?>" placeholder="00/00/0000" class="form-control" type="text">
    </div>
  </div>
</div>

</fieldset>
</div>


<!-- radio checks -->
<?php echo form_error('numBedrooms'); ?>

 <div class="form-group">
                        <label class="col-md-6 control-label">Number of Bedrooms</label>
                        <div class="col-md-6 inputGroupContainer2">
                            <select name = 'numBedrooms'>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                          </select>

                            <!-- <div class="radio">
                                <label>
                                    <input type="radio" name="numBedrooms" value="1" <?php echo  set_radio('hosting', '1'); ?>/> 1
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="numBedrooms" value="2" <?php echo  set_radio('hosting', '2'); ?>/> 2
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="numBedrooms" value="3" <?php echo  set_radio('hosting', '3'); ?>/> 3
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="numBedrooms" value="4" <?php echo  set_radio('hosting', '4'); ?>/> 4
                                </label>
                            </div> -->
                        </div>
                    </div>

<!-- Text input-->
<?php echo form_error('bathrooms'); ?>

<div class="form-group">
  <label class="col-md-6 control-label"># of Bathrooms</label>  
   <div class="col-md-6 inputGroupContainer2">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="bathrooms" value="<?php echo set_value('bathrooms'); ?>" placeholder="# of Bathrooms" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
<?php echo form_error('parking'); ?>

<div class="form-group">
  <label class="col-md-6 control-label"># of Parking Spaces</label>  
   <div class="col-md-6 inputGroupContainer2">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="parking" value="<?php echo set_value('parking'); ?>" placeholder="# of Parking Spaces" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- radio checks -->
<?php echo form_error('numPets'); ?>

 <div class="form-group">
                        <label class="col-md-6 control-label">Number of Pets?</label>
                        <div class="col-md-6 inputGroupContainer2">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="numPets" value="0" <?php echo  set_radio('numPets', '0'); ?>/> 0
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="numPets" value="1" <?php echo  set_radio('numPets', '1'); ?>/> 1
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="numPets" value="2" <?php echo  set_radio('numPets', '2'); ?>/> 2
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="numPets" value="3" <?php echo  set_radio('numPets', '3'); ?>/> 3
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="numPets" value="4" <?php echo  set_radio('numPets', '4'); ?>/> 4
                                </label>
                            </div>
                        </div>
                    </div>

<?php echo form_error('pet'); ?>
<div class="form-group">
  <label class="col-md-6 control-label">Type/Weight/Breed</label>  
  <div class="col-md-6 inputGroupContainer2">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="typeWeightBreed" value="<?php echo set_value('contactName'); ?>" placeholder="Type/Weight/Breed" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text area -->
<?php echo form_error('specialRequest'); ?>
  
<div class="form-group">
  <label class="col-md-6 control-label">Special Requests</label>
    <div class="col-md-6 inputGroupContainer2">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="specialRequest" placeholder="Special Requests">  <?php echo set_value('specialRequest'); ?> 
          </textarea>
  </div>
  </div>
</div>


<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-6 control-label">Amenities</label>
                        <div class="col-md-6 inputGroupContainer2">
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="airConditioning" value="1" <?php echo  set_radio('airConditioning', '1'); ?> /> Air Conditioning
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="carParking" value="1" <?php echo  set_radio('carParking', '1'); ?>/> Car Parking
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="highSpeedInternet" value="1" <?php echo  set_radio('highSpeedInternet', '1'); ?> /> High-Speed Internet
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="checkbox" name="satellite/CableTV" value="1" <?php echo  set_radio('satellite/CableTV', '1'); ?> /> Satellite/Cable TV
                                </label>
                            </div>
                        </div>
                    </div>


<div class="col-sm-6">
                <div class="form-group">
                    <label for="new_company_identity" class="col-sm-2 control-label">Company Identity</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="new_company_identity">
                            <option value="1">Default</option>
                            <option value="2">Company 2</option>
                            <option value="3">Company 3</option>
                        </select>
                    </div>
                </div>
</div>
<!-- Success message -->
<!-- <div class="alert alert-success" role="alert" id="success_message"> <i class="glyphicon glyphicon-thumbs-up"></i> Lead successfully submitted! </div> -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-6 control-label"></label>
  <div class="col-md-6">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>


</fieldset>
</form>
</div>
    </div><!-- /.container -->

<?php
   $_POST['localPhone'] = "";
   $_POST['housekeeping'] = "";
   $_POST['vipPackage'] = "";
   $_POST['starterPackage'] = "";
   $_POST['unconfirmed'] = "";
   $_POST['NTV'] = "";
   // $_POST['starterPackage'] = "";

?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<div class="container">
    <!-- <form class="form-horizontal"> -->


    <?php
      $attributes = array('id' => 'lead_form',
                      'class' => 'well form-horizontal');

      echo form_open('dashboard/createLead', $attributes); 
    ?>
<!--     <form class="well form-horizontal" action=" " method="post"  id="lead_form"> -->
      <legend>Create Lead</legend>
        <div class="form-group form-group-sm">

            <!-- left column -->                            
            <p class="lead">Contact Info</p>
            <div class="col-sm-6">

                 <?php echo form_error('clientName'); ?>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Client Name</label>
                    <div class="col-sm-5">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input value="<?php echo set_value('clientName'); ?>" type="text" class="form-control" name="clientName" placeholder="">
                      </div>
                    </div>

                    <?php echo form_error('companyName'); ?>
                    <div class="col-sm-5">
                        <label class="sr-only">Company Name</label>
                        <input value="<?php echo set_value('companyName'); ?>" type="text" class="form-control" name="companyName" placeholder="Company Name">
                    </div>
                </div>

              <?php echo form_error('typeHousingRequest'); ?>
              <div class="form-group ">
                    <label for="new_name" class="col-sm-4 control-label">Type of Housing Request</label>
                    <div class="col-sm-8">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input value="<?php echo set_value('typeHousingRequest'); ?>" type="text" class="form-control" name ="typeHousingRequest"  placeholder="">
                        </div>
                    </div>
                </div>

                <?php echo form_error('contactName'); ?>
                <div class="form-group">
                    <label for="new_subname" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input value="<?php echo set_value('contactName'); ?>" type="text" class="form-control" name="contactName" placeholder="">
                      </div>
                    </div>
                </div>

                <?php echo form_error('email'); ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Client Email</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input value="<?php echo set_value('email'); ?>" type="text" class="form-control" name="email" placeholder="JohnDoe@example.com, JonesSmith@example.com, ...">
                      </div>
                    </div>
                </div>

                <?php echo form_error('subject'); ?>
              <div class="form-group ">
                    <label class="col-sm-2 control-label">Email Subject</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input value="<?php echo set_value('subject'); ?>" type="text" class="form-control" name ="subject"  placeholder="">
                        </div>
                    </div>
                </div>

                <?php echo form_error('phone'); ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Phone</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                        <input value="<?php echo set_value('phone'); ?>" type="text" class="form-control" name="phone" placeholder="(000)000-0000">
                      </div>
                    </div>
                </div>

                <p class="lead">Request Info</p>

                <?php echo form_error('address'); ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                        <input value="<?php echo set_value('address'); ?>" type="text" class="form-control" name="address" placeholder="">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-2 control-label">Address 2 (optional)</label>
                    <div class="col-sm-10">
                        <input value="<?php echo set_value('address2'); ?>" type="text" class="form-control" name="address2" placeholder="">
                    </div>
                </div>

                <?php echo form_error('city'); ?>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Location</label>
                    <div class="col-sm-3">
                        <label class="sr-only">City, State Country</label>
                        <input value="<?php echo set_value('city'); ?>" type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <?php echo form_error('state'); ?>
                    <div class="col-sm-3">
                        <label class="sr-only">City, State Country</label>
                        <input type="text" value="<?php echo set_value('state'); ?>" class="form-control" name="state" placeholder="State">
                    </div>
                    <?php echo form_error('country'); ?>
                    <div class="col-sm-4">
                        <label class="sr-only">City, State Country</label>
                        <input value="<?php echo set_value('country'); ?>" type="text" class="form-control" name="country" placeholder="Country">
                    </div>
                </div>

            <?php echo form_error('zip'); ?>
             <div class="form-group">
                    <label class="col-sm-2 control-label">Zip</label>
                    <div class="col-sm-3">
                        <label class="sr-only">Zip</label>
                        <input value="<?php echo set_value('zip'); ?>" type="text" class="form-control" name="zip" placeholder="Zip">
                    </div>
                    <div class="col-sm-7">
                        <label  class="sr-only"></label>
                        <input value="<?php echo set_value('extension'); ?>" type="text" class="form-control" name="extension" placeholder="Extension (optional)">
                    </div>
                </div>


                <?php echo form_error('NTV'); ?>
                <div class="form-group"> 
                  <label class="col-md-2 control-label">NTV</label>
                    <div class="col-md-3 selectContainer">
                    <select name="NTV" class="form-control selectpicker">
                      <option value="N/A">N/A</option>
                      <option value="Confirmed" <?php echo  set_select('NTV', 'Confirmed'); ?> >Confirmed</option>
                      <option value="Unconfirm" <?php echo  set_select('NTV', 'Unconfirmed'); ?> >Unconfirmed</option>
                    </select>
                </div>
                    <div class="col-sm-7">
                        <input value="<?php echo set_value('NTVdate'); ?>" type="text" class="form-control" name="NTVdate" placeholder="MM/DD/YY (optional)">
                    </div>
                
                </div>

            </div>


            <!-- right column -->
            <div class="col-sm-6">

              <?php echo form_error('moveInDate'); ?>
              <div class="form-group">
                    <label class="col-sm-2 control-label">Move-In</label>
                    <div class="col-sm-10">
                        <input value="<?php echo set_value('moveInDate'); ?>" type="text" class="form-control" onchange="checkDates()" name="moveInDate" placeholder="MM/DD/YY" id="datepicker1">
                    </div>
                </div>

                  <?php echo form_error('moveOutDate'); ?>
            <div class="form-group">
                   <label class="col-sm-2 control-label">Move-Out</label>
                   <div class="col-sm-4">
                       <label class="sr-only"></label>
                       <input value="<?php echo set_value('moveOutDate'); ?>" type="text" onchange="checkDates()" class="form-control" name="moveOutDate" placeholder="MM/DD/YY" id="datepicker2">
                   </div>
                   <div class="col-sm-6">
                       <label  class="sr-only"></label>
                       <input value="<?php echo set_value('daysOfStay'); ?>" type="text" id="daysOfStay"class="form-control" name="extension" placeholder="" disabled>
                   </div>
               </div>
              
                <div class="form-group">
                    <label class="col-sm-4 control-label">Bedrooms</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="numBedrooms">
                            <option value="1" <?php echo  set_select('numBedrooms', '1'); ?>>1</option>
                            <option value="2" <?php echo  set_select('numBedrooms', '2'); ?>>2</option>
                            <option value="3" <?php echo  set_select('numBedrooms', '3'); ?>>3</option>
                            <option value="4" <?php echo  set_select('numBedrooms', '4'); ?>>4+</option>
                        </select>
                    </div>
                </div>
                

                <div class="form-group">
                    <label class="col-sm-4 control-label">Bathrooms</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="numBathrooms">
                            <option value="1" <?php echo  set_select('numBathrooms', '1'); ?>>1</option>
                            <option value="1.5" <?php echo  set_select('numBathrooms', '1.5'); ?>>1.5</option>
                            <option value="2" <?php echo  set_select('numBathrooms', '2'); ?>>2</option>
                            <option value="2.5" <?php echo  set_select('numBathrooms', '2.5'); ?>>2.5</option>
                            <option value="3" <?php echo  set_select('numBathrooms', '3+'); ?>>3</option>
                        </select>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label class="col-sm-4 control-label">Parking Spaces</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="numParking">
                            <option value="0" <?php echo  set_select('numParking', '0'); ?>>0</option>
                            <option value="1" <?php echo  set_select('numParking', '1'); ?>>1</option>
                            <option value="2" <?php echo  set_select('numParking', '2'); ?>>2</option>
                            <option value="3" <?php echo  set_select('numParking', '3'); ?>>3</option>
                            <option value="4" <?php echo  set_select('numParking', '4'); ?>>4+</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Pets</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="numPets">
                            <option value="0" <?php echo  set_select('numPets', '0'); ?>>0</option>
                            <option value="1" <?php echo  set_select('numPets', '1'); ?>>1</option>
                            <option value="2" <?php echo  set_select('numPets', '2'); ?>>2</option>
                            <option value="3" <?php echo  set_select('numPets', '3'); ?>>3</option>
                            <option value="4" <?php echo  set_select('numPets', '4'); ?>>4+</option>
                        </select>
                    </div>
                </div>
               

                <div class="form-group">
                    <label class="col-sm-4 control-label">Type/Weight/Breed (optional)</label>
                    <div class="col-sm-8">
                        <input value="<?php echo set_value('typeWeightBreed'); ?>" type="text" class="form-control" name="typeWeightBreed" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Budget</label>
                    <div class="col-sm-8">
                        <input value="<?php echo set_value('budget'); ?>" type="text" class="form-control" name="budget" placeholder="$">
                    </div>
                </div>

                <!-- checkbox -->
                   <div class="form-group">
                        <label class="col-md-2 control-label">Amenities</label>
                        <div class="col-md-4 inputGroupContainer2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="localPhone" value="1" <?php echo  set_checkbox('localPhone', '1'); ?> />Local Phone
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="housekeeping" value="1" <?php echo  set_checkbox('housekeeping', '1'); ?>/>House Keeping
                                </label>
                            </div>
                        </div>

                        <label class="col-md-2 control-label">Packages</label>
                        <div class="col-md-4 inputGroupContainer2">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="starterPackage" value="1" <?php echo  set_checkbox('starterPackage', '1'); ?> />Starter
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="vipPackage" value="1" <?php echo  set_checkbox('vipPackage', '1'); ?> /> VIP
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="asian" value="1" <?php echo  set_checkbox('asian', '1'); ?> />Asian
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="apple" value="1" <?php echo  set_checkbox('apple', '1'); ?> />Apple
                                </label>
                            </div>
                    </div>

                <!-- End main input boxes, starting a new "row" -->
                  <?php echo form_error('specialRequest'); ?>
                  <div class="form-group form-group-sm">
                      <div class="col-sm-11 text-left">
                          <div class="form-group">
                              <label for="new_comments" class="col-sm-3 control-label">Special Requests</label>
                              <div class="col-sm-12">
                                  <textarea class="form-control" name="specialRequest" rows = "3" placeholder="">  <?php echo set_value('specialRequest'); ?> 
                                  </textarea>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-12 text-center"> 
                <button id="singlebutton" type="submit" class="btn btn-primary" name="singlebutton" >Create Lead<span class="glyphicon glyphicon-send"></span></button> 
                </div>
            </div>

    </form>
</div> <!-- End container div -->

<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$( function() {
  $( "#datepicker1" ).datepicker();
  $( "#datepicker2" ).datepicker();
} );
</script>
<script type="text/javascript">
    function checkDates(){
        document.getElementById("daysOfStay").style.color = "black";
        document.getElementById("singlebutton").disabled = false;
        if(document.getElementById("datepicker1").value == ""){
            return;
        }
        if(document.getElementById("datepicker2").value == ""){
           return ;
        }
        var date1 = new Date(document.getElementById("datepicker1").value).getTime();
        var date2 = new Date(document.getElementById("datepicker2").value).getTime();
        if(date2 < date1){
            document.getElementById("daysOfStay").value = "Those dates don't make sense!";
            document.getElementById("singlebutton").disabled = false;
            document.getElementById("daysOfStay").style.color = "red";
            document.getElementById("singlebutton").disabled = true;
        }
        else{
            var std = 1000 * 60 * 60 * 24;
            var difference_ms = Math.abs(date1 - date2);
            document.getElementById("daysOfStay").value = (Math.round(difference_ms/std)+1) + " days"; //+1 because the days are INCLUSIVE.
            document.getElementById("singlebutton").disabled = false;
        }
    }
</script>
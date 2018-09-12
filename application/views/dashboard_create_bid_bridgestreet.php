<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/css/bidstyle.css" type="text/css"></script>
<script src="<?php echo base_url();?>assets/js/create_bid_bridgestreet.js"></script>
</head>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<?php
//Defaults
   $_POST['leadID'] = $id;
?> 

<!-- <?php  var_dump($tableHeaders)?> -->

<div class="container">
  <div class="well form-horizontal">
  <div class="row">
  <legend><?php echo $leadDetail?></legend>

    <div class="col-sm-12">
      <table class="table table-hover">
        <thead>
          <tr>
          
            <th>Unit Size</th>
            <th>Move In Date</th>
            <th>Move Out Date</th>
            <th>Length of Stay</th>
            <th>Desired Location</th>

          </tr>
        </thead>
        <tbody>
          <tr>

            <td><?php echo $tableHeaders['unitSize'] ? $tableHeaders['unitSize'] : "Not Specified"; ?></td>
            <td><?php echo $tableHeaders['moveIn'] ? $tableHeaders['moveIn'] : "Not Specified"; ?></td>
            <td><?php echo $tableHeaders['moveOut'] ? $tableHeaders['moveOut'] : "Not Specified"; ?></td>
            <td><?php echo $tableHeaders['LOS'] ? $tableHeaders['LOS'] : "Not Specified"; ?></td>
            <td><?php echo $tableHeaders['locale'] ? $tableHeaders['locale'] : "Not Specified"; ?></td>

          </tr>
        </tbody>
      </table>
        
      <table class="table table-hover">
        <thead>
          <tr>

            <th>Amenities</th>
            <th>Special Requests</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            
            <td><?php echo $tableHeaders['amenities'] ? $tableHeaders['amenities'] : "None Specified"; ?></td>
            <td><?php echo $tableHeaders['specialRequests'] ? $tableHeaders['specialRequests'] : "Not Specified"; ?></td>

          </tr>
        </tbody>
      </table>
    </div>
  </div>
  </div>
</div>


<div class="container">

    <?php
      $attributes = array('id' => 'bid_form_bridgestreet',
                          'class' => 'well form-horizontal',
                          'role' => 'form',
                          'action' => '');

      echo form_open('dashboard/createBid', $attributes); 
    ?>

  <fieldset>
      
  <legend><?php echo $header?></legend>
  

      <!-- left column -->                            
      <div class="col-sm-6">

        <?php echo form_error('firstName'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">First Name</label>
            <div class="col-sm-10 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('firstName'); ?>" type="text" class="form-control" name ="firstName"  placeholder="">
            </div>
            </div>
        </div>

        <?php echo form_error('lastName'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">Last Name</label>
            <div class="col-sm-10 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('lastName'); ?>" type="text" class="form-control" name ="lastName"  placeholder="">
            </div>
            </div>
        </div>

        <?php echo form_error('phoneNumber'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">Phone Number</label>
            <div class="col-sm-10 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('city'); ?>" type="text" class="form-control" name ="phoneNumber"  placeholder="">
            </div>
            </div>
        </div>

        <?php echo form_error('emailAddress'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('emailAddress'); ?>" type="text" class="form-control" name ="emailAddress"  placeholder="">
            </div>
            </div>
        </div>   

        <?php echo form_error('propertyName'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">Property Name</label>
            <div class="col-sm-10 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('propertyName'); ?>" type="text" class="form-control" name ="propertyName"  placeholder="">
            </div>
            </div>
        </div>

        <?php echo form_error('propertyWebsite'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">Property Website</label>
            <div class="col-sm-10 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('propertyWebsite'); ?>" type="text" class="form-control" name ="propertyWebsite"  placeholder="">
            </div>
            </div>
        </div>


        <?php echo form_error('address'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-10 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('address'); ?>" type="text" class="form-control" name ="address"  placeholder="">
            </div>
            </div>
        </div>

        <?php echo form_error('address2'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">Address 2</label>
            <div class="col-sm-10 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('address2'); ?>" type="text" class="form-control" name ="address2"  placeholder="">
            </div>
            </div>
        </div>

        <?php echo form_error('city'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">City</label>
            <div class="col-sm-10 inputGroupContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('city'); ?>" type="text" class="form-control" name ="city"  placeholder="">
            </div>
            </div>
        </div>

        <?php echo form_error('state'); ?>
        <div class="form-group">
          <label for="new_subname" class="col-sm-2 control-label">State</label>
            <div class="col-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('state'); ?>" type="text" class="form-control" name="state" placeholder="">
            </div>
            </div>
        </div>

        <?php echo form_error('zipcode'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Zip code</label>
            <div class="col-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('zipcode'); ?>" type="text" class="form-control" name="zipcode" placeholder="">
            </div>
            </div>
        </div>

        <?php echo form_error('country'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Country</label>
            <div class="col-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('country'); ?>" type="text" class="form-control" name="country" placeholder="">
            </div>
            </div>
        </div>



        <div class="form-group">
          <label class="col-md-2 control-label">Amenities</label>
          <div class="col-md-10">
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="24HourReception" <?php echo set_checkbox('24HourReception', 1); ?>/> 24 Hour reception
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="airConditioning" <?php echo set_checkbox('airConditioning', 1); ?>/> Air Conditioning
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="airportTransportation" <?php echo set_checkbox('airportTransportation', 1); ?>/> Airport Transportation
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="airConditioning" <?php echo set_checkbox('airConditioning', 1); ?>/> High-Speed Internet
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="houseKeeping" <?php echo set_checkbox('houseKeeping', 1); ?>/> Housekeeping
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="keysMailed" <?php echo set_checkbox('keysMailed', 1); ?>/> Keys mailed to guest
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="liftAccess" <?php echo set_checkbox('liftAccess', 1); ?>/> Lift Access
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="localPhone" <?php echo set_checkbox('localPhone', 1); ?>/> Local Phone
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="meetAndGreet" <?php echo set_checkbox('meetAndGreet', 1); ?>/> Meet and Greet
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="satelliteCableTv" <?php echo set_checkbox('satelliteCableTv', 1); ?>/> Satellite/Cable TV
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="petFriendly" <?php echo set_checkbox('petFriendly', 1); ?>/> Pet Friendly
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="hosting" value="backgroundCheck" <?php echo set_checkbox('backgroundCheck', 1); ?>/> Background Check
                  </label>
              </div>
          </div>
        </div>

        <?php echo form_error('petFee'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Pet Fee</label>
            <div class="col-sm-10">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
              <input value="<?php echo set_value('country'); ?>" type="text" class="form-control" name="country" placeholder="">
            </div>
            </div>
        </div>

        <div class="form-group"> 
          <label class="col-md-2 control-label">Refundable?</label>
            <div class="col-md-10 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <select name="distance" class="form-control selectpicker" >
              <option value="N/A" <?php echo set_select('refundable', 'N/A'); ?> > N/A</option>
              <option value="Refundable" <?php echo set_select('refundable', '< 5'); ?> > Refundable</option>
              <option value="Non-Refundable" <?php echo set_select('refundable', '5 - 10 miles'); ?> > Non-Refundable</option>
              </select>
            </div>
            </div>
        </div>

        <div class="form-group"> 
          <label class="col-md-2 control-label">Total or Per Pet</label>
            <div class="col-md-10 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <select name="distance" class="form-control selectpicker" >
              <option value="N/A" <?php echo set_select('totalPerPet', 'N/A'); ?> > N/A</option>
              <option value="Refundable" <?php echo set_select('totalPerPet', 'Total'); ?> > Total</option>
              <option value="Non-Refundable" <?php echo set_select('totalPerPet', 'Per Pet'); ?> > Per Pet</option>
              </select>
            </div>
            </div>
        </div>

        <?php echo form_error('parkingSpaces'); ?>
        <div class="form-group">
          <label class="col-md-2 control-label">Parking Spaces</label>
            <div class="col-md-6 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="unitSize" class="form-control selectpicker" >
                <option value="0" <?php echo  set_select('parkingSpaces', 0); ?> >0</option>
                <option value="1" <?php echo  set_select('parkingSpaces', 1); ?> >1</option>
                <option value="2" <?php echo  set_select('parkingSpaces', 2); ?> >2</option>
                <option value="3" <?php echo  set_select('parkingSpaces', 3); ?> >3</option>
                <option value="4" <?php echo  set_select('parkingSpaces', 4); ?> >4</option>
                <option value="5" <?php echo  set_select('parkingSpaces', 5); ?> >5</option>
                <option value="6" <?php echo  set_select('parkingSpaces', 6); ?> >6</option>
                <option value="7" <?php echo  set_select('parkingSpaces', 7); ?> >7</option>
                <option value="8" <?php echo  set_select('parkingSpaces', 8); ?> >8</option>
                </select>
            </div>
            </div>
        </div>

        <div class="form-group"> 
          <label class="col-md-2 control-label">Washer/Dryer</label>
            <div class="col-md-10 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <select name="washerDryer" class="form-control selectpicker" >
              <option value="In-Suite" <?php echo set_select('washerDryer', 'In-Suite'); ?> > In-Suite</option>
              <option value="On Site" <?php echo set_select('washerDryer', 'On Site'); ?> > On Site</option>
              </select>
            </div>
            </div>
        </div>

        <div class="form-group"> 
          <label class="col-md-2 control-label">Internet</label>
            <div class="col-md-10 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
              <select name="internet" class="form-control selectpicker" >
              <option value="In-Suite" <?php echo set_select('internet', 'Wireless'); ?> > Wireless</option>
              <option value="On Site" <?php echo set_select('internet', 'Wired'); ?> > Wired</option>
              <option value="None" <?php echo set_select('internet', 'None'); ?> > None</option>
              </select>
            </div>
            </div>
        </div>




        <?php echo form_error('unitSize'); ?>
        <div class="form-group">
          <label class="col-md-2 control-label">Unit Size</label>
            <div class="col-md-6 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="unitSize" class="form-control selectpicker" >
                <option value=" ">Select</option>
                <option value="Studio Apartment" <?php echo  set_select('unitSize', 'Studio Apartment'); ?> >Studio Apartment</option>
                <option value="1 Bedroom Apartment" <?php echo  set_select('unitSize', '1 Bedroom Apartment'); ?> >1 Bedroom Apartment</option>
                <option value="2 Bedroom Apartment" <?php echo  set_select('unitSize', '2 Bedroom Apartment'); ?> >2 Bedroom Apartment</option>
                <option value="3 Bedroom Apartment" <?php echo  set_select('unitSize', '3 Bedroom Apartment'); ?> >3 Bedroom Apartment</option>
                <option value="4 Bedroom Apartment" <?php echo  set_select('unitSize', '4 Bedroom Apartment'); ?> >4 Bedroom Apartment</option>
                <option value="Hotel Studio" <?php echo  set_select('unitSize', 'Hotel Studio'); ?> >Hotel Studio</option>
                <option value="Hotel - 1 Bedroom" <?php echo  set_select('unitSize', 'Hotel - 1 Bedroom'); ?> >Hotel - 1 Bedroom</option>
                <option value="Hotel - 2 Bedroom" <?php echo  set_select('unitSize', 'Hotel - 2 Bedroom'); ?> >Hotel - 2 Bedroom</option>
                <option value="Hotel - 3 Bedroom" <?php echo  set_select('unitSize', 'Hotel - 3 Bedroom'); ?> >Hotel - 3 Bedroom</option>
            </select>
            </div>
            </div>
        </div>

        <?php echo form_error('bath'); ?>
        <div class="form-group">
          <label class="col-md-2 control-label">Bath Size</label>
          <div class="col-md-10 selectContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
            <select name="bath" class="form-control selectpicker" >
              <option value=" ">Select</option>
              <option value="1 Bath" <?php echo  set_select('bath', '1 Bath'); ?> >1 Bath</option>
              <option value="1.5 Bath" <?php echo  set_select('bath', '1.5 Bath'); ?> > 1.5 Bath</option>
              <option value="2 Bath" <?php echo  set_select('bath', '2 Bath'); ?> > 2 Bath</option>
              <option value="2.5 Bath" <?php echo  set_select('bath', '2.5 Bath'); ?> > 2.5 Bath</option>
              <option value="3 Bath" <?php echo  set_select('bath', '3 Bath'); ?> > 3 Bath</option>
            </select>
          </div>
          </div>
        </div>



        
      </div> <!-- END LEFT COLUMN -->

      <!-- START OF RIGHT COLUMN -->
      <div class="col-sm-6">

        <?php echo form_error('dateAvailable'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Date Available</label>
          <div class="col-sm-4">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <input value="<?php echo set_value('dateAvailable'); ?>" type="text" class="form-control" name="dateAvailable" placeholder="" id="datepicker">
          </div>
          </div>

          <label class="col-sm control-label"></label>
          <div class="col-sm-6">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <input value="<?php echo set_value('mlto'); ?>" type="text" class="form-control" name="mlto" placeholder="Min. Lease Term Offered">
          </div>
          </div>

        </div>

        <?php echo form_error('longTermDiscount'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Long Term Discounts?</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <input value="<?php echo set_value('longTermDiscount'); ?>" type="text" class="form-control" name="longTermDiscount" placeholder="">
          </div>
          </div>
        </div>


        <?php echo form_error('moveInDate'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Move-In</label>
          <div class="col-sm-4">
            <input style="position: relative; z-index: 1;" value="<?php echo set_value('moveInDate'); ?>" type="text" class="form-control" onchange="checkDates()" name="moveInDate" placeholder="MM/DD/YY" id="datepicker1">
          </div>
        </div>

        <?php echo form_error('validFor'); ?>
          <div class="form-group">
            <label class="col-md-2 control-label">Valid For</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"></span>
              <select name="validFor" class="form-control selectpicker" >
                <option value=" ">Select</option>
                <option value="1 Day" <?php echo  set_select('validFor', '1 Day'); ?> >1 Day</option>
                <option value="1 Day" <?php echo  set_select('validFor', '2 Days'); ?> >2 Days</option>
                <option value="1 Day" <?php echo  set_select('validFor', '3 Days'); ?> >3 Days</option>
                <option value="1 Day" <?php echo  set_select('validFor', '4 Days'); ?> >4 Days</option>
                <option value="1 Day" <?php echo  set_select('validFor', '5 Days'); ?> >5 Days</option>
                <option value="1 Day" <?php echo  set_select('validFor', '6 Days'); ?> >6 Days</option>
                <option value="1 Day" <?php echo  set_select('validFor', '7 Days'); ?> >7 Days</option>
                <option value="1 Day" <?php echo  set_select('validFor', '14 Days'); ?> >14 Days</option>
                <option value="1 Day" <?php echo  set_select('validFor', '30 Days'); ?> >30 Days</option>

               </select>
            </div>
            </div>
        </div>

        <?php echo form_error('rate'); ?>
          <div class="form-group">
            <label class="col-md-2 control-label">Rate By:</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"></span>
              <select name="rate" class="form-control selectpicker" >
                <option value=" ">Select</option>
                <option value="Daily" <?php echo  set_select('rate', 'Daily'); ?> >Daily</option>
                <option value="Weekly" <?php echo  set_select('rate', 'Weekly'); ?> >Weekly</option>
                <option value="Monthly" <?php echo  set_select('rate', 'Monthly'); ?> >Monthly</option>
               </select>
            </div>
            </div>
          </div>

        <?php echo form_error('distance'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Distance</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <input value="<?php echo set_value('distance'); ?>" type="text" class="form-control" name="taxRate" placeholder="">
          </div>
          </div>
        </div>

        <?php echo form_error('parkingAccomodation'); ?>
          <div class="form-group">
            <label class="col-md-2 control-label">Parking Accomodation</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"></span>
              <select name="parkingAccomodation" class="form-control selectpicker" >
                <option value="No Parking" <?php echo  set_select('parkingAccomodation', 'No Parking'); ?> >No Parking</option>
                <option value="Free Parking" <?php echo  set_select('parkingAccomodation', 'Free Parking'); ?> >Free Parking</option>
                <option value="Parking for Additional Fee" <?php echo  set_select('parkingAccomodation', 'Parking for Additional Fee'); ?> >Parking for Additional Fee</option>
               </select>
            </div>
            </div>
          </div>

        <?php echo form_error('parkingAccomodation'); ?>
          <div class="form-group">
            <label class="col-md-2 control-label">Parking Accomodation</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"></span>
              <select name="currency" class="form-control selectpicker" >
                <option value="$USD" <?php echo  set_select('currency', '$USD'); ?> >$USD</option>
              </select>
            </div>
            </div>
          </div>

           <?php echo form_error('taxVATTVA'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Tax/VAT/TVA</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <input value="<?php echo set_value('taxVATTVA'); ?>" type="text" class="form-control" name="taxVATTVA" placeholder="">
          </div>
          </div>
        </div>

        <?php echo form_error('leaseTerms'); ?>
          <div class="form-group">
            <label class="col-md-2 control-label">Lease Terms/Payment</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"></span>
              <select name="leaseTerms" class="form-control selectpicker" >
                <option value="7 Days" <?php echo  set_select('leaseTerms', '7 Days'); ?> >7 Days</option>
                <option value="14 Days" <?php echo  set_select('leaseTerms', '14 Days'); ?> >14 Days</option>
                <option value="21 Days" <?php echo  set_select('leaseTerms', '21 Days'); ?> >21 Days</option>
                <option value="Month To Month" <?php echo  set_select('leaseTerms', 'Month To Month'); ?> >Month To Month</option>
                <option value="2 Months" <?php echo  set_select('leaseTerms', '2 Months'); ?> >2 Months</option>
                <option value="3 Months" <?php echo  set_select('leaseTerms', '3 Months'); ?> >3 Months</option><option value="6 Months" <?php echo  set_select('leaseTerms', '6 Months'); ?> >6 Months</option>
               </select>
            </div>
            </div>
        </div>

        <?php echo form_error('noticeTerms'); ?>
          <div class="form-group">
            <label class="col-md-2 control-label">Notice Terms</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"></span>
              <select name="noticeTerms" class="form-control selectpicker" >
                <option value="1 Day" <?php echo  set_select('noticeTerms', '1 Day'); ?> >1 Day</option>
                <option value="3 Days" <?php echo  set_select('noticeTerms', '3 Days'); ?> >3 Days</option>
                <option value="7 Days" <?php echo  set_select('noticeTerms', '7 Days'); ?> >7 Days</option>
                <option value="14 Days" <?php echo  set_select('noticeTerms', '14 Days'); ?> >14 Days</option>
                <option value="30 Days" <?php echo  set_select('noticeTerms', '30 Days'); ?> >30 Days</option>
                <option value="60 Days" <?php echo  set_select('noticeTerms', '60 Days'); ?> >60 Days</option>
               </select>
            </div>
            </div>
        </div>

        <?php echo form_error('advancedNotice'); ?>
        <div class="form-group">
            <label class="col-md-2 control-label">Advanced Notice</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"></span>
              <select name="advancedNotice" class="form-control selectpicker" >
                <option value="1 Day" <?php echo  set_select('advancedNotice', '1 Day'); ?> >1 Day</option>
                <option value="3 Days" <?php echo  set_select('advancedNotice', '3 Days'); ?> >3 Days</option>
                <option value="7 Days" <?php echo  set_select('advancedNotice', '7 Days'); ?> >7 Days</option>
                <option value="14 Days" <?php echo  set_select('advancedNotice', '14 Days'); ?> >14 Days</option>
                <option value="30 Days" <?php echo  set_select('advancedNotice', '30 Days'); ?> >30 Days</option>
                <option value="60 Days" <?php echo  set_select('advancedNotice', '60 Days'); ?> >60 Days</option>
               </select>
            </div>
            </div>
        </div>

        <?php echo form_error('advancedNoticeHours'); ?>
        <div class="form-group">
            <label class="col-md-2 control-label">Advanced Notice</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"></span>
              <select name="advancedNoticeHours" class="form-control selectpicker" >
                <option value="1" <?php echo  set_select('advancedNoticeHours', '1'); ?> >1</option>
                <option value="2" <?php echo  set_select('advancedNoticeHours', '2'); ?> >2</option>
                <option value="3" <?php echo  set_select('advancedNoticeHours', '3'); ?> >3</option>
                <option value="4" <?php echo  set_select('advancedNoticeHours', '4'); ?> >4</option>
                <option value="5" <?php echo  set_select('advancedNoticeHours', '5'); ?> >5</option>
                <option value="6" <?php echo  set_select('advancedNoticeHours', '6'); ?> >6</option>
                <option value="7" <?php echo  set_select('advancedNoticeHours', '7'); ?> >7</option>
                <option value="8" <?php echo  set_select('advancedNoticeHours', '8'); ?> >8</option>
                <option value="9" <?php echo  set_select('advancedNoticeHours', '9'); ?> >9</option>
                <option value="10" <?php echo  set_select('advancedNoticeHours', '10'); ?> >10</option>
                <option value="11" <?php echo  set_select('advancedNoticeHours', '11'); ?> >11</option>
                <option value="12" <?php echo  set_select('advancedNoticeHours', '12'); ?> >12</option>
                <option value="13" <?php echo  set_select('advancedNoticeHours', '13'); ?> >13</option>
                <option value="14" <?php echo  set_select('advancedNoticeHours', '14'); ?> >14</option>
                <option value="15" <?php echo  set_select('advancedNoticeHours', '15'); ?> >15</option>
                <option value="16" <?php echo  set_select('advancedNoticeHours', '16'); ?> >16</option>
                <option value="17" <?php echo  set_select('advancedNoticeHours', '17'); ?> >17</option>
                <option value="18" <?php echo  set_select('advancedNoticeHours', '18'); ?> >18</option>
                <option value="19" <?php echo  set_select('advancedNoticeHours', '19'); ?> >19</option>
                <option value="20" <?php echo  set_select('advancedNoticeHours', '20'); ?> >20</option>
                <option value="21" <?php echo  set_select('advancedNoticeHours', '21'); ?> >21</option>
                <option value="22" <?php echo  set_select('advancedNoticeHours', '22'); ?> >22</option>
                <option value="23" <?php echo  set_select('advancedNoticeHours', '23'); ?> >23</option>
                <option value="24" <?php echo  set_select('advancedNoticeHours', '24'); ?> >24</option>                
               </select>
            </div>
            </div>
        </div>

        <?php echo form_error('commission'); ?>
        <div class="form-group">
            <label class="col-md-2 control-label">Advanced Notice</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"></span>
              <select name="leaseTerms" class="form-control selectpicker" >
                <option value=" ">Select</option>
                <option value="Net" <?php echo  set_select('commission', 'Net'); ?> >Net</option>
                <option value="Comissionable" <?php echo  set_select('commission', 'Comissionable'); ?> >Comissionable</option>
                
               </select>
            </div>
            </div>
        </div>

        <?php echo form_error('ifCommissionable'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">ifCommissionable</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <input value="<?php echo set_value('ifCommissionable'); ?>" type="text" class="form-control" name="ifCommissionable" placeholder="">
          </div>
          </div>
        </div>

        <?php echo form_error('VATTVA'); ?>
        <div class="form-group">
            <label class="col-md-2 control-label">Select VAT/TVA</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"></span>
              <select name="leaseTerms" class="form-control selectpicker" >
                <option value=" ">Select</option>
                <option value="1" <?php echo  set_select('commission', '20% for the first 28 days, reduced to 4% thereafter'); ?> >20% for the first 28 days, reduced to 4% thereafter</option>
                <option value="2" <?php echo  set_select('commission', '3.5% GST'); ?> >3.5% GST</option>
                
               </select>
            </div>
            </div>
        </div>

        <?php echo form_error('sqft'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Square Footage</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <input value="<?php echo set_value('sqft'); ?>" type="text" class="form-control" name="sqft" placeholder="">
          </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">TAX/VAT Reduction after 30 Days?</label>
          <div class="col-md-10">
              <div class="radio">
                  <label>
                      <input type="radio" name="hosting" value="1" <?php echo set_radio('24HourReception', 1); ?>/> Yes
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="hosting" value="0" <?php echo set_radio('24HourReception', 0); ?>/> No
                  </label>
              </div>
            </div>
          </div>

        <?php echo form_error('taxafter'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">If Yes, input tax reduction</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <input value="<?php echo set_value('taxafter'); ?>" type="text" class="form-control" name="taxafter" placeholder="">
          </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 control-label">Can be reserved individually?</label>
          <div class="col-md-10">
              <div class="radio">
                  <label>
                      <input type="radio" name="reserved" value="1" <?php echo set_radio('reserved', 1); ?>/> Yes
                  </label>
              </div>
              <div class="radio">
                  <label>
                      <input type="radio" name="reserved" value="0" <?php echo set_radio('reserved', 0); ?>/> No
                  </label>
              </div>
            </div>
          </div>

        <?php echo form_error('cancellationPolicy'); ?>
        <div class="form-group">
            <label class="col-md-2 control-label">Cancellation Policy</label>
            <div class="col-md-4 selectContainer">
            <div class="input-group">
            <span class="input-group-addon"></span>
              <select name="cancellationPolicy" class="form-control selectpicker" >
                <option value=" ">Select</option>
                <option value="1" <?php echo  set_select('cancellationPolicy', 'Cancellation within 3 days'); ?> >Cancellation within 3 days</option>
                <option value="2" <?php echo  set_select('cancellationPolicy', 'Cancellation within 7 days'); ?> >Cancellation within 7 days</option>
                <option value="3" <?php echo  set_select('cancellationPolicy', 'Cancellation within 14 days'); ?> >Cancellation within 14 days</option>
                <option value="4" <?php echo  set_select('cancellationPolicy', 'Cancellation within 30 days'); ?> >Cancellation within 30 days</option>
                <option value="5" <?php echo  set_select('cancellationPolicy', '24 Hours notice prior to arrival date'); ?> >24 Hours notice prior to arrival date</option>
                <option value="6" <?php echo  set_select('cancellationPolicy', '48 Hours notice prior to arrival date'); ?> >48 Hours notice prior to arrival date</option>
                <option value="7" <?php echo  set_select('cancellationPolicy', 'Non-Refundable'); ?> >Non-Refundable</option>
               </select>
            </div>
            </div>
        </div>

        <?php echo form_error('comments'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">Comments</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <textarea value="<?php echo set_value('comments'); ?>" type="text" class="form-control" name ="comments"  placeholder=""></textarea>
            </div>
          </div>
        </div>


        <!-- <?php echo form_error('propertyProfile'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Property Profile</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
              <input value="<?php echo set_value('propertyProfile'); ?>" type="file" class="form-control" name="profileFile" placeholder="">
            <input value="" type="input" class="form-control" name="disabled" placeholder="Not Available Yet" disabled>
          </div>
          </div>
        </div>

        <?php echo form_error('additionalFiles'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Additional Files</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <input value="<?php echo set_value('additionalFiles'); ?>" type="file" class="form-control" name="additionalFiles" placeholder="">
            <input value="" type="input" class="form-control" name="disabled" placeholder="Not Available Yet" disabled>
          </div>
          </div>
        </div>

        <?php echo form_error('propertyURL'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Property URL</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <input value="<?php echo set_value('propertyURL'); ?>" type="text" class="form-control" name="propertyURL" placeholder="">
          </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">High-Speed Internet</label>
          <div class="col-md-6 inputGroupContainer2">
          <div class="radio">
            <label><input type="radio" name="internet" value="Hard Wire" <?php echo  set_radio('internet', 'Hard Wire'); ?>/>Included - Hard Wire</label>
                              
            <label><input type="radio" name="internet" value="Wireless" <?php echo  set_radio('internet', 'Wireless'); ?>/>Included - Wireless</label>
        
            <label><input type="radio" name="internet" value="Not Included" <?php echo  set_radio('internet', 'Not Included'); ?>/>Not Included</label>                            
          </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Local Phone</label>
          <div class="col-md-6 inputGroupContainer2">
          <div class="radio">
            <label><input type="radio" name="localPhone" value="Local" <?php echo  set_radio('localPhone', 'Local'); ?>/>Local</label>
                              
            <label><input type="radio" name="localPhone" value="Local + Long Distance" <?php echo  set_radio('localPhone', 'Local + Long Distance'); ?>/>Local + Long Distance</label>
        
            <label><input type="radio" name="localPhone" value="Not Included" <?php echo  set_radio('localPhone', 'Not Included'); ?>/>Not Included</label>                            
          </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Cable Service</label>
          <div class="col-md-6 inputGroupContainer2">
          <div class="radio">
            <label><input type="radio" name="cable" value="Basic" <?php echo  set_radio('cable', 'Basic'); ?>/>Basic</label>
                              
            <label><input type="radio" name="cable" value="Expanded" <?php echo  set_radio('cable', 'Expanded'); ?>/>Expanded</label>

            <label><input type="radio" name="cable" value="Premium" <?php echo  set_radio('cable', 'Premium'); ?>/>Premium</label>

            <label><input type="radio" name="cable" value="Not Included" <?php echo  set_radio('cable', 'Not Included'); ?>/>Not Included</label>
          </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Laundry Service</label>
          <div class="col-md-6 inputGroupContainer2">
          <div class="radio">
            <label><input type="radio" name="laundry" value="In Unit" <?php echo  set_radio('laundry', 'In Unit'); ?>/>In Unit</label>
            <label><input type="radio" name="laundry" value="On Site" <?php echo  set_radio('laundry', 'On Site'); ?>/>On Site</label>
            <label><input type="radio" name="laundry" value="Not Included" <?php echo  set_radio('laundry', 'Not Included'); ?>/>Not Included</label>
            <label><input type="radio" name="laundry" value="Other" <?php echo  set_radio('laundry', 'Other'); ?>/>Other</label>
          </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Parking</label>
          <div class="col-md-6 inputGroupContainer2">
          <div class="radio">
            <label><input type="radio" name="parking" value="Garage" <?php echo  set_radio('parking', 'Garage'); ?>/>Garage</label>
            <label><input type="radio" name="parking" value="Covered" <?php echo  set_radio('parking', 'Covered'); ?>/>Covered</label>
            <label><input type="radio" name="parking" value="Open Reserved" <?php echo  set_radio('parking', 'Open Reserved'); ?>/>Open Reserved</label>
            <label><input type="radio" name="parking" value="Open Unreserved" <?php echo  set_radio('parking', 'Open Unreserved'); ?>/>Open Unreserved</label>
            <label><input type="radio" name="parking" value="N/A" <?php echo  set_radio('parking', 'N/A'); ?>/>N/A</label>
          </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">House Keeping</label>
          <div class="col-md-6 inputGroupContainer2">
          <div class="radio">
            <label><input type="radio" name="houseKeeping" value="Daily" <?php echo  set_radio('houseKeeping', 'Daily'); ?>/>Daily</label>
            <label><input type="radio" name="houseKeeping" value="Weekly" <?php echo  set_radio('houseKeeping', 'Weekly'); ?>/>Weekly</label>
            <label><input type="radio" name="houseKeeping" value="Bi-Weekly" <?php echo  set_radio('houseKeeping', 'Bi-Weekly'); ?>/>Bi-Weekly</label>
            <label><input type="radio" name="houseKeeping" value="Monthly" <?php echo  set_radio('houseKeeping', 'Monthly'); ?>/>Monthly</label>
            <label><input type="radio" name="houseKeeping" value="Not Included" <?php echo  set_radio('houseKeeping', 'Not Included'); ?>/>Not Included</label>
          </div>
          </div>
        </div>

        <?php echo form_error('parkingFee'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Parking Fee?</label>
          <div class="col-sm-10">
            <input value="<?php echo set_value('parkingFee'); ?>" type="text" class="form-control" name="parkingFee" placeholder="$">
          </div>
        </div>

        <?php echo form_error('petPolicy'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">Pet Policy</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <textarea value="<?php echo set_value('petPolicy'); ?>" type="text" class="form-control" name ="petPolicy"  placeholder=""></textarea>
          </div>
          </div>
        </div>

        <?php echo form_error('petInfo'); ?>
        <div class="form-group">
          <label class="col-sm-2 control-label">Pet Fee/Rent</label>
          <div class="col-sm-3">
          <label class="sr-only">Pet Deposit</label>
            <input value="<?php echo set_value('petFee'); ?>" type="text" class="form-control" name="petFee" placeholder="$ Fee">
          </div>

          <div class="col-sm-7">
          <label  class="sr-only"></label>
            <input value="<?php echo set_value('petRent'); ?>" type="text" class="form-control" name="petRent" placeholder="$ Rent/Mo">
          </div>
        </div>

        <?php echo form_error('comments'); ?>
        <div class="form-group ">
          <label for="new_name" class="col-sm-2 control-label">Comments</label>
          <div class="col-sm-10">
          <div class="input-group">
          <span class="input-group-addon"></span>
            <textarea value="<?php echo set_value('comments'); ?>" type="text" class="form-control" name ="comments"  placeholder=""></textarea>
            </div>
          </div>
        </div>
 -->
      </div> <!-- RIGHT COLUMN END -->
     
        <div class="form-group">
          <div class="col-md-12 text-center"> 
          <?php
            $source = isset($source) ? $source : "";  
            if($source != "Regency") {
              echo "Sorry, you can only create bids for Regency Leads at the moment";
            }
            else{
              echo "<button id=\"singlebutton\" type=\"submit\" class=\"btn btn-primary\" name=\"singlebutton\" >Create Bid<span class=\"glyphicon glyphicon-send\"></span></button>";
            }
          ?>
          </div>
        </div>

  </fieldset>  
</div> <!-- End container div -->

<!-- 
<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
 -->
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
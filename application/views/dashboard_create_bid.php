<script type="text/javascript" src="<?php echo base_url();?>/assets/css/bidstyle.css" ></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<?php
//Defaults
   $_POST['leadID'] = $id;

   // $_POST['starterPackage'] = "";

?> 

<div class="container">
  <div class="well form-horizontal">
    <div class="row">
          <legend><?php echo $leadDetail?></legend>

              <div class="col-sm-12">
                <table class="table table-hover">
                  <thead>
                    <tr>

                      <th>Unit Size</th>
                      <th>Reservation #</th>
                      <th>Move In Date</th>
                      <th>Move Out Date</th>
                      <th>Length of Stay</th>
                      <th>Desired Location</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                      <td>Three Bedroom</td>
                      <td>#2342351</td>
                      <td>11/30/18</td>
<!--                       <td><?php echo $moveInDate?></td>
 -->                  <td>11/30/18</td>
                      <td>88 days</td>
                      <td>California</td>

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
                      <td>High-Speed Internet, Washer/Dryer</td>
                      <td>Extra towels</td>
                    </tr>
                  </tbody>
                </table>
              </div>
    </div>
  </div>
</div>


<div class="container">
    <!-- <form class="form-horizontal"> -->


    <?php
      $attributes = array('id' => 'bid_form',
                      'class' => 'well form-horizontal',
                      'role' => 'form');

      echo form_open('dashboard/createBid', $attributes); 
    ?>
<!--     <form class="well form-horizontal" action=" " method="post"  id="lead_form"> -->
      <legend><?php echo $header?></legend>
        <div class="form-group form-group-sm">

            <!-- left column -->                            
            <div class="col-sm-6">
                <div class="form-group">
                        <label class="col-md-4 control-label">Property Type/Level</label>
                        <div class="col-md-6 inputGroupContainer2">
                            <div class="radio">
                                <label class="radio-inline"><input type="radio" name="propertyType" value="A" <?php echo  set_radio('propertyType', 'A'); ?>/>A</label>
                                                  
                                <label class="radio-inline"><input type="radio" name="propertyType" value="B" <?php echo  set_radio('propertyType', 'B'); ?>/>B</label>
                            
                                <label class="radio-inline"><input type="radio" name="propertyType" value="C" <?php echo  set_radio('propertyType', 'C'); ?>/>C</label>
                            
                                <label class="radio-inline"><input type="radio" name="propertyType" value="Hotel" <?php echo  set_radio('propertyType', 'Hotel'); ?>/>Hotel</label>
                            </div>
                        </div>
                     </div>   



                <?php echo form_error('community'); ?>

                   
                <div class="form-group"> 
                  <label class="col-md-2 control-label">Select Community</label>
                    <div class="col-md-10 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <!-- <select name="community" class="form-control selectpicker" >
                      <option value=" " >Select</option>
                      <option value="Wyoming" <?php echo  set_select('community', 'Wyoming'); ?> >Wyoming</option>
                    </select> -->
                    <input value="" type="input" class="form-control" name="disabled" placeholder="Not Available Yet" disabled>
                  </div>
                </div>
                </div>

                <?php echo form_error('otherCommunity'); ?>
                 <div class="form-group">
                    <label class="col-sm-2 control-label">Community</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input value="<?php echo set_value('otherCommunity'); ?>" type="text" class="form-control" name="otherCommunity" placeholder="">
                      </div>
                    </div>
                </div>

                <?php echo form_error('address'); ?>
              <div class="form-group ">
                    <label for="new_name" class="col-sm-2 control-label">Address</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input value="<?php echo set_value('address'); ?>" type="text" class="form-control" name ="address"  placeholder="">
                        </div>
                    </div>
                </div>

              <?php echo form_error('city'); ?>
              <div class="form-group ">
                    <label for="new_name" class="col-sm-2 control-label">City</label>
                    <div class="col-sm-10">
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


                <div class="form-group"> 
                  <label class="col-md-2 control-label">Approximate Distance</label>
                    <div class="col-md-10 selectContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                    <select name="distance" class="form-control selectpicker" >
                      <option value=" ">Select</option>
                      <option value="< 5 miles" <?php echo  set_select('distance', '< 5'); ?> > < 5 miles</option>
                      <option value="5 - 10 miles" <?php echo  set_select('distance', '5 - 10 miles'); ?> > 5 - 10 miles</option>
                      <option value="10 - 15 miles" <?php echo  set_select('distance', '10 - 15 miles'); ?> > 10 - 15 miles</option>
                      <option value="15 - 20 miles" <?php echo  set_select('distance', '15 - 20 miles'); ?> > 15 - 20 miles</option>
                      <option value="&gt; 20 miles" <?php echo  set_select('distance', '&gt; 20 miles'); ?> > &gt; 20 miles</option>
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
                    <?php echo form_error('sqft'); ?>
                    <div class="col-sm-4">
                        <label class="sr-only">Square Foot</label>
                        <input value="<?php echo set_value('sqft'); ?>" type="text" class="form-control" name="sqft" placeholder="Size (sqft)">
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


                <div class="form-group">
                        <label class="col-md-2 control-label">Rate</label>
                        <div class="col-md-6 inputGroupContainer2">
                            <div class="radio">
                                <label><input type="radio" name="rate" value="Daily" <?php echo  set_radio('rate', 'Daily'); ?>/>Daily</label>
                                                  
                                <label><input type="radio" name="rate" value="Weekly" <?php echo  set_radio('rate', 'Weekly'); ?>/>Weekly</label>
                            
                                <label><input type="radio" name="rate" value="Montly" <?php echo  set_radio('rate', 'Monthly'); ?>/>Monthly</label>
                            
                                <input value="<?php echo set_value('rateValue'); ?>" type="text" class="form-control" name="rateValue" placeholder="$">
                            </div>
                        </div>
                     </div>

                 <?php echo form_error('taxRate'); ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tax Rate</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input value="<?php echo set_value('taxRate'); ?>" type="text" class="form-control" name="taxRate" placeholder="">
                      </div>
                    </div>
                </div>

                <?php echo form_error('otherFees'); ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Other Fees</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <input value="<?php echo set_value('otherFees'); ?>" type="text" class="form-control" name="otherFees" placeholder="">
                      </div>
                    </div>
                </div>

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

                <!-- <p class="lead">Request Info</p>

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
 -->
            </div>


            <!-- right column -->
            <div class="col-sm-6">


                <?php echo form_error('propertyProfile'); ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Property Profile</label>
                    <div class="col-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"></span>
                        <!-- <input value="<?php echo set_value('propertyProfile'); ?>" type="file" class="form-control" name="profileFile" placeholder=""> -->
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
                        <!-- <input value="<?php echo set_value('additionalFiles'); ?>" type="file" class="form-control" name="additionalFiles" placeholder=""> -->
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

<!--  -->
            </div>
        </div>

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

    </form>
</div> <!-- End container div -->

<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
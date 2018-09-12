
<div class="container">
    <!-- <form class="form-horizontal"> -->


    <?php
      $attributes = array('id' => 'profile_form',
                      'class' => 'well form-horizontal');

      echo form_open('dashboard/profile', $attributes); 
    ?>

    <legend>Profile</legend>
      <div class="form-group ">
                    <label for="new_name" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-7">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input value="<?php echo $email; ?>" type="text" class="form-control" name ="email"  placeholder="">
                        </div>
                    </div>
                </div>

        <div class="form-group" id="passwordInit">
                    <label for="new_name" class="col-sm-3 control-label">Change Password</label>
                    <div class="col-sm-7">
                    <div class="input-group">
                        <button type="button" class="btn btn-default" onclick="openPassword()">Click to change password</button>
                        </div>
                    </div>
                </div>

        <div class="form-group" style="display: none;" id="passwordOld">
                    <label for="new_name" class="col-sm-3 control-label">Old Password</label>
                    <div class="col-sm-7">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-right"></i></span>
                        <input value="" type="password" class="form-control" name ="oldPassword"  placeholder="">
                        </div>
                    </div>
                </div>

       <div class="form-group" style="display: none;" id="passwordNew">
                    <label for="new_name" class="col-sm-3 control-label">New Password</label>
                    <div class="col-sm-7">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-right"></i></span>
                        <input value="" type="password" class="form-control" name ="newPassword"  placeholder="">
                        </div>
                    </div>
                </div>

        <div class="form-group" style="display: none;" id="passwordConf">
                    <label for="new_name" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-7">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-chevron-right"></i></span>
                        <input value="" type="password" class="form-control" name ="confirmPassword"  placeholder="">
                        </div>
                    </div>
                </div>

      <div class="form-group ">
                    <label for="new_name" class="col-sm-3 control-label">Signature</label>
                    <div class="col-sm-7">
                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                        <textarea value="<?php echo($email); ?>" type="text" class="form-control" name ="signature"  placeholder=""><?php echo($signature); ?></textarea>
                        </div>
                    </div>
                </div>

       <div class="form-group">
            <div class="col-md-12 text-center"> 
                <button type="submit" class="btn btn-warning"  >Update<span class="glyphicon glyphicon-send"></span></button> 
                </div>
            </div>
            <?php echo "<h3 align=\"center\">$body</h3>"; ?>
</div>

<script type="text/javascript">
    function openPassword(){
        document.getElementById("passwordInit").style ="display: none;";
        document.getElementById("passwordOld").style ="";
        document.getElementById("passwordNew").style ="";
        document.getElementById("passwordConf").style ="";
    }
</script>
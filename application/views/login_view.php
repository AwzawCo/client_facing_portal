<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css"  />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/login_style.css">

</head>

<body>
  <div class="login">
	<h1>RegencyCL Dashboard Log in</h1>
    <form method="post" action="login/validate">
    	<input type="text" name="username" placeholder="Username" required="required" value=<?php echo '"'.$username.'"';?>/>
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Log In</button>
    </form>
    <center>
    <p class="padded">
    	<br>
    <a class="padded" href="<?php echo site_url('login/signup') ?>">Create Account</a> 
<!--     <font color="#337ab7" size="4"> | </font> <a class="padded" href="<?php echo site_url('login/forgotPassword') ?>">Forgot Password?</a> -->
    <?php 
    	if($color == "green"){
    		echo "<h4>$body</h4>";
    	}
    	else
    		echo "<h3>$body</h3>";
    ?>

<!--     <div class="alert alert-danger text-center">
    	<strong>You are not logged in</strong>
   	</div> -->

</div>
</body>
</html>

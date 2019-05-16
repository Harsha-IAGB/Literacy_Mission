<?php include('contribute_server.php') ?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 <html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="contribute_register.php">
  	<?php include('errors.php'); ?>
      
      <div class="input-group">
            
  	  <label>First_Name</label>
  	  <input type="text" name="fname" value="<?php echo $fname; ?>">
  	</div>
      <div class="input-group">
            
  	  <label>Last_Name</label>
  	  <input type="text" name="lname" value="<?php echo $lname; ?>">
  	</div>
      <div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
      <div class="input-group">
  	  <label>Mobile</label>
  	  <input type="text" name="mobile" value="<?php echo $mobile; ?>">
  	</div>
      
  	<div class="input-group">
            
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="contribute.php">Sign in</a>
  	</p>
  </form>
</body>
</html>


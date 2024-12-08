<html>
<head>
	<title>CI Tutorials</title>
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
 <div class="login-signup-form animated fadeInDown">
	 <div class="form">
		 <h2 class="title">Create Account Your Account</h2>
		 <form action="<?php echo base_url('ucheck')?>" method="post">
			 <input type="text" name="mail" placeholder="Full Name"/>
             <input type="email" name="email" placeholder="Email"/>
             <input type="text" name="phone" placeholder="Phone"/>
			 <input type="password" name="password" placeholder="*******"/>
			 <button type="submit" class="btn btn-block">SingUp</button>
			 <p class="message">
				 Already Registered <a href="<?php echo base_url('login') ?>">Login</a>
			 </p>
		 </form>
	 </div>
 </div>
</body>
</html>
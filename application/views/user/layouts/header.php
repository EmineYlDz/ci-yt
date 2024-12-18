<html>
<head>
	<title>CI Tutorials</title>
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
</head>
<body>
    <div id="defaultLayout">
        <aside>
            <a href="<?php echo base_url(uri:'dashboard')?>">Dashboard</a>
            <a href="<?php echo base_url(uri:'users')?>">User</a>
        </aside>
        <div class="content">
            <header>
                <div>
                    Header
                </div>
                <div>
                   <?php echo $this->session->userdata('name')     ?> 
                   <a href="<?php echo base_url(uri:'login')?>" class="btn btn-logout">Logout</a>
                 </div>
            </header> 
       
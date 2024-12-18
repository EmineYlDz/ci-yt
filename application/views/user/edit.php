<html>
    <head>
        <title>CI Tutorials</title>
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="card">
        <div id="defaultLayout animated fadeInDown">
            <div class="form">
                <h2 class="title">Update User</h2>
                <form action="<?php echo base_url('update/'.$user->id)?>" method="post">
                    <input type="text" value="<?php echo $user->name; ?>" required name="name" placeholder="Full Name"/>
                    <input type="email" value="<?php echo $user->email; ?>" required name="email" placeholder="Email"/>
                    <input type="text" value="<?php echo $user->phone; ?>" name="phone" placeholder="Phone"/>
                    <input type="password" required name="password" placeholder="*******"/>
                    <button type="submit" class="btn btn-edit">Update</button>
                    
                </form>
            </div>
        </div></div>
    </body>
</html>
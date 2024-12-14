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
                   Emine
                   <a href="#" class="btn btn-logout">Logout</a>
                </div>
            </header> 
            <main>
                <div class="card animated fadeInDown">
                    <table>
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Create At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <body>
                        <?php $no=0; foreach ($users as $user) { $no++;?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $user->name?></td>
                            <td><?php echo $user->email?></td>
                            <td><?php echo $user->created_at?></td>
                            <td>
                                <a href="<?php echo base_url(uri:'edit/'.$user->id)?>" class="btn-edit">Edit</a>
                                <a href="<?php echo base_url(uri:'delete/'.$user->id)?>" class="btn-edit">Delete</a>
                            </td>
                        </tr>
                        <?php }?>
                        </body>
                    </table>
                </div>
            </main> 
        </div>
    </div>
</body>
</html>
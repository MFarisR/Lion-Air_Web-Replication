<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/icon.png" type="image/x-icon">
</head>
<body class="bg-secondary">
    <div class="container w-25 mt-5 mb-5 p-4 shadow bg-white">
        <h3 class="mb-3 text-center">Login</h3>
        <form action="<?=site_url()?>login/exec" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input name="username" type="text" class="form-control" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" placeholder="Enter password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-2 mt-2">Login</button>
        </form>
    </div>

    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    
    <!-- <?php include 'template/Modal_notification.php'?> -->
</body>
</html>
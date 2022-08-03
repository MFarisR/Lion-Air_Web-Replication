<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/font-awesome/css/all.min.css">
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/icon.png" type="image/x-icon">
</head>
<body class="bg-secondary">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container w-75">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=site_url()?>"><i class="fas fa-home"></i>&nbsp;&nbsp;Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=site_url()?>logout"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a>

                    </li>
                </ul>
                <span class="navbar-text" style="color: white;">
                    Hello, <?=$this->session->userdata('admin')['name']?>
                </span>
            </div>
        </div>
    </nav>

    <div class="container w-50 mb-3 p-4 shadow bg-white" style="margin-top:70px;">
        <form action="<?=site_url()?>post/add" method="POST" class="mb-4 text-right">
            <div class="form-group text-left">
                <label>Write a post</label>
                <textarea name="content" class="form-control" rows="3" placeholder="What's happening?" required></textarea>
            </div>
            <button class="btn btn-primary w-100">Post!</button>
        </form>

        <?php foreach($posts->result_array() as $row) { ?>
            <div style="display: flex;" class="mb-3">
                <div style="flex: 1; max-width: 110px;">
                    <img style="width:80px;" class="rounded-circle" src="<?=base_url()?>assets/img/profile.jpg" alt="profile">
                </div>
                <div style="flex: 1;">
                    <div class="row mt-2">
                        <h4>
                            <?=$row['name']?>
                        </h4>
                    </div>
                    <div class="row">
                        <?=$row['content']?>
                    </div>
                </div>
                <div style="flex: 1; max-width: 100px;" class="text-right">
                    <?php if ($this->session->userdata('admin')['id_user'] == $row['id_user']) { ?> <!-- Tambahkan kondisi ketika session userdata id_user sama dengan row id_user (supaya tombol delete hanya muncul di post sendiri saja) -->
                        <button class="btn btn-sm btn-danger mt-4" type="button" data-toggle="modal" data-target="#delete<?=$row['id_post']?>">
                            <i class="fas fa-times"></i>
                        </button>
                    <?php } ?>
                </div>
            </div>
            <?php include 'template/Modal_delete.php'?>
        <?php } ?>
    </div>

    <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>

    <?php include 'template/Modal_notification.php'?>
</body>
</html>
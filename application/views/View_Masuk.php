<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Login/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Login/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/Login/css/Google-Style-Login.css">
</head>

<body>
    <div id="layer1">
        <div class="login-card"><img src="<?php echo base_url();?>assets/Login/img/login.png" class="profile-img-card">
            <p class="profile-name-card"><strong>PROFSHOP</strong></p>
            <br>
            <form class="form-signin" action="<?php echo base_url();?>Controller_Masuk/login" enctype="multipart/form-data" method="post" accept-charset="utf-8" ><span class="reauth-email"> </span>
                <input class="form-control" type="text" required placeholder="User Name" autofocus="" id="txt_username" name="txt_username" oninvalid="this.setCustomValidity('User Name Tidak Boleh Kosong')"
    oninput="setCustomValidity('')"  >
                <input class="form-control" type="password" required placeholder="Password" id="txt_password" name="txt_password" oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong')"
    oninput="setCustomValidity('')" >
                <div class="checkbox"></div>
                <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Masuk</button>
            </form>
            <div style="text-align: center; margin-top: 30px">
                <p>&copy; <?php echo date('Y'); ?> Al-Falaq Project. All rights reserved</p>
            </div>

        </div>

    </div>
    <script src="<?php echo base_url();?>assets/Login/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/Login/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

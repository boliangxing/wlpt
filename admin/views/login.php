<link href="<?php echo base_url()?>public/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>public/font-awesome/css/font-awesome.css" rel="stylesheet">

<link href="<?php echo base_url()?>public/css/animate.css" rel="stylesheet">
<link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet">
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>欢迎来到 物联网平台</h3>

            <p>Login in. </p>
            <form class="m-t" role="form"  method="post"  action="<?php echo site_url('Login/index') ?>">
                <div class="form-group">
                    <input type="email" class="form-control"  name="email" placeholder="用户名称" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="密码" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">登录</button>

                <a href="forgot_password.html"><small>忘记密码?</small></a>
                <p class="text-muted text-center"><small>没有帐户？</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">创建一个帐户</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2017</small> </p>
        </div>
    </div>
<?php $this->load->view('footer');?>
    <!-- Mainly scripts -->

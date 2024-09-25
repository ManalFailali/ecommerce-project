<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset("admin_template/vendor/bootstrap/css/bootstrap.min.css")}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset("admin_template/vendor/font-awesome/css/font-awesome.min.css")}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset("admin_template/css/font.css")}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset("admin_template/css/style.default.css")}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset("admin_template/img/favicon.ico")}}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
    <div class="login-page">
        <div class="container d-flex align-items-center">
            <div class="form-holder has-shadow">
                <div class="row">
                    <!-- Logo & Information Panel-->
                    <div class="col-lg-6">
                        <div class="info d-flex align-items-center">
                            <div class="content">
                                <div class="logo">
                                    <h1>Dashboard</h1>
                                </div>
                                <p>Admin Space.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Form Panel    -->
                    <div class="col-lg-6 bg-white">
                        <div class="form d-flex align-items-center">
                            <div class="content">
                                <form method="post" class="form-validate" action="{{url('admin/login')}}">
                                    @csrf
                                        <div class="form-group">
                                            <input id="login-username" type="text" name="email" required data-msg="Please enter your username" class="input-material" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material" placeholder="Password">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet" />
    <!-- end of global level css -->
    <!-- page level css -->
    <link href="asset/css/pages/login2.css" rel="stylesheet" />
    <link href="asset/vendors/iCheck/skins/minimal/blue.css" rel="stylesheet" />
    <!-- styles of the page ends-->
</head>

<body>
    <div class="container">
        <div class="row vertical-offset-100">
            <div class=" col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3  col-md-5 col-md-offset-4 col-lg-4 col-lg-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">สมัครสมาชิก</h3>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" action="register.php" method="post" role="form">
                            <fieldset>
                                <div class="form-group input-group">
                                    <div class="input-group-addon"> <i class="livicon" data-name="user" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="username" name="username" type="text" />
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-addon"> <i class="livicon" data-name="key" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" />
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-addon"> <i class="livicon" data-name="at" data-size="18" data-c="#000" data-hc="#000" data-loop="true"></i>
                                    </div>
                                    <input class="form-control" placeholder="example@domain.com" name="email" type="email" value="" />
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me" class="minimal-blue">
                                        I agree for terms
                                    </label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" value="Login" type="submit">Sign Up</button>
                            </fieldset>
                        </form><br />
                        <a href="index.php">กลับหน้าหลัก</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--<form action="register.php" method="POST">
            <label for="username">Username: </label>
            <input type="text" name="username" required autofocus>
            <label for="password">Password: </label>
            <input type="password" name="password" required>
            <label for="email">E-mail: </label>
            <input type="email" name="email" placeholder="example@domain.com" required>
            <br><br>
            <input type="submit" value="ลงทะเบียน">
        </form>
        <br>
        <br>
        <a href="index.php">กลับหน้าหลัก</a>
      </div>-->
        <!-- global js -->
        <script src="asset/js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="asset/js/bootstrap.min.js" type="text/javascript"></script>
        <!--livicons-->
        <script src="asset/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
        <script src="asset/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
        <!-- end of global js -->
        <!-- begining of page level js-->
        <script src="asset/js/TweenLite.min.js"></script>
        <script src="asset/vendors/iCheck/icheck.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $(document).mousemove(function(event) {
                TweenLite.to($('body'), .5, {css:{'background-position':parseInt(event.pageX/8) + "px "+parseInt(event.pageY/12)+"px, "+parseInt(event.pageX/15)+"px "+parseInt(event.pageY/15)+"px, "+parseInt(event.pageX/30)+"px "+parseInt(event.pageY/30)+"px"}});
            });

            //Flat red color scheme for iCheck
            $('input[type="checkbox"].minimal-blue').iCheck({
                checkboxClass: 'icheckbox_minimal-blue'
            });
        });
        </script>
        <!-- end of page level js-->
    </body>
    </html>


<!--<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div>
        <h1>ลงทะเบียน</h1>
        <form action="register.php" method="POST">
            <label for="username">Username: </label>
            <input type="text" name="username" required autofocus>
            <label for="password">Password: </label>
            <input type="password" name="password" required>
            <label for="email">E-mail: </label>
            <input type="email" name="email" placeholder="example@domain.com" required>
            <br><br>
            <input type="submit" value="ลงทะเบียน">
        </form>
        <br>
        <br>
        <a href="index.php">กลับหน้าหลัก</a>
        </div>
    </body>
</html>-->

<?php
$page = 'User';
$title = 'Hello user';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<!--end of page level css-->
EOT;
require_once('include/_header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            Form Examples
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">Forms</a>
            </li>
            <li class="active">
                Form Examples
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <!--row starts-->
            <div class="col-lg-6">
                <!--lg-6 starts-->
                <!--basic form starts-->
                <div class="panel panel-primary" id="hidepanel1">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Basic form #1
                        </h3>
                        <span class="pull-right">
                            <i class="glyphicon glyphicon-chevron-up clickable"></i>
                            <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">Name</label>
                                    <div class="col-md-9">
                                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="email">
                                        Your E-mail
                                    </label>
                                    <div class="col-md-9">
                                        <input id="email" name="email" type="text" placeholder="Your email" class="form-control"></div>
                                </div>
                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="message">
                                        Your message
                                    </label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
                                    </div>
                                </div>

                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
                                        <button type="submit" class="btn btn-responsive btn-primary btn-sm">Submit</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
              
        <!--main content ends-->
    </section>
    <!-- content -->
</aside>
<!-- right-side -->
<?php
require_once('include/_footer.php');
?>
<!-- begining of page level js -->
<script src="asset/vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
<!-- end of page level js -->
</body>
</html>

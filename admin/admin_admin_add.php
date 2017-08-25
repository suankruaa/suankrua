<?php
$page = 'Admin';
$title = 'Hello admin';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<!--end of page level css-->
EOT;
require_once('include/_header.php');

if (isset($_POST["btnsubmit"])) {
		$id_admin = $_POST["id_admin"];
		$name_admin = $_POST["name_admin"];
		$username = $_POST["username"];
		$password = $_POST["password"];

		$sql = "INSERT INTO admin (id_admin,name_admin,username,password)
		VALUES('$id_admin','$name_admin','$username','$password')";
		$result = mysqli_query($link, $sql);
		if ($result) {
			echo "<script type='text/javascript'>";
			echo "alert('เพิมเสร็จแล้ว');";
			echo "window.location='list_admin.php';";
			echo "</script>";
			//header('location: admin_product.php');
		}else{
			die("Query Failed" . mysqli_error($conn));
			// echo "<font color='red'>SQL Error</font><hr>";
		}
	}
?>


<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            เพิ่มข้อมูลผู้ดูแลระบบ
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">ข้อมูลผู้ดูแลระบบ</a>
            </li>
            <li class="active">
                เพิ่มข้อมูลผู้ดูแลระบบ
            </li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <!--row starts-->
            <div class="col-lg-12">
                <!--lg-6 starts-->
                <!--basic form starts-->
                <div class="panel panel-primary" id="hidepanel1">
									<div class="panel-heading">
											<h3 class="panel-title"> <i class="livicon" data-name="plus" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
													เพิ่มผู้ดูแลระบบ
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                <label class="col-md-3 control-label" for="id">รหัสผู้ดูแลระบบ</label>
                                <div class="col-md-3">
                                <input id="id_admin" name="id_admin" type="text" placeholder="ID" class="form-control"></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                <label class="col-md-3 control-label" for="name">ชื่อผู้ดูแลระบบ</label>
                                <div class="col-md-3">
                                <input id="name_admin" name="name_admin" type="text" placeholder="NAME" class="form-control"></div>
                                </div>
                                <!-- Message body -->
																<div class="form-group">
                                <label class="col-md-3 control-label" for="user">ชื่อผู้ใช้ *</label>
                                <div class="col-md-3">
                                <input id="username" name="username" type="text" placeholder="USERNAME" class="form-control"></div>
                                </div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="pass">รหัสผ่าน *</label>
																<div class="col-md-3">
																<input id="password" name="password" type="text" placeholder="PASSWORD" class="form-control"></div>
																</div>
																                      <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">

                                         <button type="submit" name="btnsubmit" value="send" class="btn btn-primary">เพิ่ม</button>
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

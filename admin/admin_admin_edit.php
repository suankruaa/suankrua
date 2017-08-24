<?php
$page = 'Admin';
$title = 'Hello admin';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<!--end of page level css-->
EOT;
require_once('include/_header.php');

if (isset($_POST["btnEdit"])) {
		$id_admin = $_POST["id_admin"];
		$name_admin = $_POST["name_admin"];
		$username = $_POST["username"];
		$password = $_POST["password"];

		$sql = "update admin set id_admin='$id_admin', name_admin='$name_admin', username='$username', password='$password' where id_admin='$id_admin'";
		//echo $sql;exit;
		$result = mysqli_query($link, $sql);
		if ($result) {
			echo "<script type='text/javascript'>";
			echo "alert('แก้ไขข้อมูลสำเร็จ');";
			echo "window.location='list_admin.php';";
			echo "</script>";
			//header('location: admin_product.php');
		}else{
			echo "<font color='red'>SQL Error</font><hr>";
		}
	}else{
		$id_admin = $_GET["id_admin"];
		$sql = "select * from admin where id_admin='$id_admin'";
		$result = mysqli_query($link, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			$id_admin = $row["id_admin"];
			$name_admin = $row["name_admin"];
			$username = $row["username"];
			$password = $row["password"];
		}else{
			$id_admin = "";
			$name_admin = "";
			$username = "";
			$password = "";
		}
	}
?>

<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
          แก้ไขข้อมูลผู้ดูแลระบบ
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">แก้ไขข้อมูลผู้ดูแลระบบ</a>
            </li>
            <li class="active">
                แก้ไขข้อมูลผู้ดูแลระบบ
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
											<h3 class="panel-title"> <i class="livicon" data-name="pencil" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
													แก้ไขข้อมูลผู้ดูแลระบบ
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="admin_admin_edit.php" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                <label for="id" class="col-md-3 control-label">รหัสผู้ดูแลระบบ</label>
                                <div class="col-md-3">
                                <input  name="id_admin" type="text" type="text" value="<?php echo "$id_admin"; ?>" class="form-control"></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                <label class="col-md-3 control-label" for="name">ชื่อผู้ดูแลระบบ</label>
                                <div class="col-md-3">
                                <input  name="name_admin" type="text"  value="<?php echo "$name_admin"; ?>" class="form-control"></div>
                                </div>
                                <!-- Message body -->
                                <div class="form-group">
                                <label class="col-md-3 control-label" for="detail">ชื่อผู้ใช้</label>
																<div class="col-md-3">
                                <input  name="username" type="text"  value="<?php echo "$username"; ?>" class="form-control"></div>
                                </div>

                                <div class="form-group">
                                <label class="col-md-3 control-label" for="money">รหัสผ่าน</label>
                                <div class="col-md-3">
                                <input  name="password" type="text" value="<?php echo "$password"; ?>" class="form-control"></div>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">


                                      <button name="btnEdit" type="submit" value="แก้ไขข้อมูลผู้ดูแลระบบ" class="btn btn-primary">บันทึก</button>
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

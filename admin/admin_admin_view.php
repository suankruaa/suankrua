<?php
$page = 'Admin';
$title = 'Hello admin';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<!--end of page level css-->
EOT;
require_once('include/_header.php');

if (isset($_GET["id_admin"])) {
		$id_admin = $_GET["id_admin"];
		$sql = "SELECT * FROM admin WHERE id_admin='$id_admin'";
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
          ข้อมูลผู้ดูแลระบบ
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
                ข้อมูลผู้ดูแลระบบ
            </li>
        </ol>
    </section>
    <!--section ends-->
		<section class="content paddingleft_right15">
        <div class="row col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"> <i class="livicon" data-name="credit-card" data-size="20" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                      รายงานรายละเอียดข้อมูลผู้ดูแลระบบ
                    </h3>
                </div>
                <div class="row">
									<!-- <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
												<img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
										</div> -->
										<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
												<div class="container">
													<h2><?=$id_admin?> <?=$name_admin?><p></h2>
												</div>
													<label class="col-md-5 control-label" for="id">รหัสผู้ดูแลระบบ</label><p><?=$id_admin?></p>
													<label class="col-md-5 control-label" for="id">ชื่อผู้ดูแลระบบ</label><p><?=$name_admin?></p>
													<label class="col-md-5 control-label" for="id">ชื่อผู้ใช้</label><p><?=$username?></p>
													<label class="col-md-5 control-label" for="id">รหัสผ่าน</label><p><?=$password?></p>
										</div>
                    <div class="pull-right" style="margin:10px 20px;">
                        <button type="button" class="btn btn-responsive button-alignment btn-info" data-toggle="button">
                        <a style="color:#fff;" onclick="javascript:window.print();">Print<i class="livicon" data-name="printer" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i></a>
                        </button>
                        <button type="button" class="btn btn-responsive button-alignment btn-warning" data-toggle="button">
                        <a style="color:#fff;">Submit Your Invoice<i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i></a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
</aside>
<!-- right-side -->
<?php
require_once('include/_footer.php');
?>
</body>
</html>

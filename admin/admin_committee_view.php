<?php
$page = 'Admin';
$title = 'Hello admin';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<!--end of page level css-->
EOT;
require_once('include/_header.php');

if (isset($_GET["id_committee"])) {
		$id_committee = $_GET["id_committee"];
		$sql = "SELECT * FROM committee WHERE id_committee='$id_committee'";
		$result = mysqli_query($link, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			$id_committee = $row["id_committee"];
			$com_idcard = $row["com_idcard"];
			$id_title = $row["id_title"];
			$com_name = $row["com_name"];
			$id_position = $row["id_position"];
			$com_birthday = $row["com_birthday"];
			$com_address = $row["com_address"];
			$com_tel = $row["com_tel"];
			$com_username = $row["com_username"];
			// $com_password = $row["com_password"];
		}else{
			$id_committee = "";
			$com_idcard = "";
			$id_title = "";
			$com_name = "";
			$id_position = "";
			$com_birthday = "";
			$com_address = "";
			$com_tel = "";
			$com_username = "";
			// $com_password = "";
		}
	}
?>



<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            แก้ไขข้อมูลกรรมการ
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">แก้ไขข้อมูลกรรมการ</a>
            </li>
            <li class="active">
                แก้ไขข้อมูลกรรมการ
            </li>
        </ol>
    </section>
    <!--section ends-->
		<section class="content paddingleft_right15">
        <div class="row col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"> <i class="livicon" data-name="credit-card" data-size="20" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                        Invoice for purchase #33221
                    </h3>
                </div>
                <div class="row">
									<!-- <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
												<img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
										</div> -->
										<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
												<div class="container">
													<h2><?=$id_title?> <?=$com_name?><p></h2>
												</div>
													<p><?=$id_committee?></p>
													<p><?=$com_idcard?></p>
													<p><?=$id_title?></p>
													<p><?=$com_name?></p>
													<p><?=$id_position?></p>
													<p><?=$com_birthday?></p>
													<p><?=$com_address?></p>
													<p><?=$com_tel?></p>
													<p><?=$com_username?></p>
										</div>
                    <div class="pull-right" style="margin:10px 20px;">
                        <button type="button" class="btn btn-responsive button-alignment btn-info" data-toggle="button">
                            <a style="color:#fff;" onclick="javascript:window.print();">
                                Print
                                <i class="livicon" data-name="printer" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            </a>
                        </button>
                        <button type="button" class="btn btn-responsive button-alignment btn-success" data-toggle="button">
                            <a style="color:#fff;">
                                Submit Your Invoice
                                <i class="livicon" data-name="check" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            </a>
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

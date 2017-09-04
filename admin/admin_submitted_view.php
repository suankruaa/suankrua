<?php
$page = 'Admin';
$title = 'Hello admin';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<!--end of page level css-->
EOT;
require_once('include/_header.php');

if (isset($_GET["sub_id"])) {
		$sub_id = $_GET["sub_id"];
		$sql = "SELECT * FROM submitted
						LEFT JOIN commits ON submitted.id_commit = commits.id_commit WHERE sub_id='$sub_id'";
		$result = mysqli_query($link, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			$sub_id = $row["sub_id"];
			$mem_id = $row["mem_id"];
			$mem_name = $row["mem_name"];
			$sub_moneyloan = $row["sub_moneyloan"];
			$sub_objective = $row["sub_objective"];
			$sub_date = $row["sub_date"];
			$sub_idcardBM1 = $row["sub_idcardBM1"];
			$sub_status1 = $row["sub_status1"];
			$sub_idcardBM2 = $row["sub_idcardBM2"];
			$sub_status2 = $row["sub_status2"];
			$id_commit = $row["name_commit"];
		}else{
			$sub_id = "";
			$mem_id = "";
			$mem_name = "";
			$sub_moneyloan = "";
			$sub_objective = "";
			$sub_date = "";
			$sub_idcardBM1 = "";
			$sub_status1 = "";
			$sub_idcardBM2 = "";
			$sub_status2 = "";
			$id_commit = "";
		}
	}
?>



<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
          ข้อมูลกรรมการ
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">ข้อมูลการยื่นกู้</a>
            </li>
            <li class="active">
                ข้อมูลการยื่นกู้
            </li>
        </ol>
    </section>
    <!--section ends-->
		<section class="content paddingleft_right15">
        <div class="row col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"> <i class="livicon" data-name="credit-card" data-size="20" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                      รายงานรายละเอียดข้อมูลการยื่นกู้
                    </h3>
                </div>
                <div class="row">
									<!-- <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
												<img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
										</div> -->
										<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
												<div class="container">
													<h2><?=$mem_name?><p></h2>
												</div>
													<label class="col-md-5 control-label" for="id">รหัสกการยื่นกู้</label><p><?=$sub_id?></p>
													<label class="col-md-5 control-label" for="id">รหัสสมาชิก</label><p><?=$mem_id?></p>
													<label class="col-md-5 control-label" for="id">ชื่อ-สกุลสมาชิก</label><p><?=$mem_name?></p>
													<label class="col-md-5 control-label" for="id">จำนวนเงินที่ขอกู้</label><p><?=$sub_moneyloan?></p>
													<label class="col-md-5 control-label" for="id">วัตถุประสงค์ในการขอกู้</label><p><?=$sub_objective?></p>
													<label class="col-md-5 control-label" for="id">วันที่ยื่นกู้</label><p><?=$sub_date?></p>
													<label class="col-md-5 control-label" for="id">เลขที่บัตรผู้ค้ำประกันคนที่ 1</label><p><?=$sub_idcardBM1?></p>
													<label class="col-md-5 control-label" for="id">สถานะผู้ค้ำประกันคนที่ 1</label><p><?=$sub_status1?></p>
													<label class="col-md-5 control-label" for="id">เลขที่บัตรผู้ค้ำประกันคนที่ 2้</label><p><?=$sub_idcardBM2?></p>
													<label class="col-md-5 control-label" for="id">สถานะผู้ค้ำประกันคนที่ 2</label><p><?=$sub_status2?></p>
													<label class="col-md-5 control-label" for="id">ชื่อกรรมการ</label><p><?=$id_commit?></p>
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

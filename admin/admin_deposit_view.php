<?php
$page = 'Admin';
$title = 'Hello admin';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<!--end of page level css-->
EOT;
require_once('include/_header.php');

if (isset($_GET["mem_id"])) {
		$mem_id = $_GET["mem_id"];
		$sql = "SELECT DISTINCT deposit.mem_id,
		member.mem_name,
		deposit.fak_date,
		deposit.fak_sum,
		deposit.withdraw,
		deposit.fak_total,
		commits.name_commit
		FROM deposit LEFT JOIN member
		ON deposit.mem_id = member.mem_id
		LEFT JOIN commits
		ON deposit.id_commit = commits.id_commit
		ORDER BY deposit.mem_id asc
		";
		$result = mysqli_query($link, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			$fak_id = $row["fak_id"];
			$fak_date = $row["fak_date"];
			$mem_id = $row["mem_id"];
			$name_commit = $row["name_commit"];
			$fak_sum = $row["fak_sum"];
			$withdraw = $row["withdraw"];
			$fak_total = $row["fak_total"];

		}else{
			$fak_id = "";
			$fak_date = "";
			$mem_id = "";
			$name_commit = "";
			$fak_sum = "";
			$withdraw = "";
			$fak_total = "";

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
                <a href="#">ข้อมูลการฝากเงินสัจจะออมทรัพย์</a>
            </li>
            <li class="active">
                ข้อมูลการฝากเงินสัจจะออมทรัพย์
            </li>
        </ol>
    </section>
    <!--section ends-->
		<section class="content paddingleft_right15">
        <div class="row col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"> <i class="livicon" data-name="credit-card" data-size="20" data-loop="true" data-c="#fff" data-hc="#fff"></i>
                      รายงานรายละเอียดข้อมูลการฝากเงินสัจจะออมทรัพย์
                    </h3>
                </div>
                <div class="row">
									<!-- <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
												<img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
										</div> -->
										<div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
												<div class="container">
													<h2><?=$fak_id?> <?=$mem_id?><p></h2>
												</div>
													<label class="col-md-5 control-label" for="id">รหัสการฝาก</label><p><?=$fak_id?></p>
													<label class="col-md-5 control-label" for="id">วันที่ฝาก</label><p><?=$fak_date?></p>
													<label class="col-md-5 control-label" for="id">รหัสสมาชิก</label><p><?=$mem_id?></p>
													<label class="col-md-5 control-label" for="id">ชื่อผู้รับฝาก</label><p><?=$name_commit?></p>
													<label class="col-md-5 control-label" for="id">จำนวนเงินฝาก</label><p><?=$fak_sum?></p>
													<label class="col-md-5 control-label" for="id">ยอดเงินฝากครั้งล่าสุด</label><p><?=$withdraw?></p>
													<label class="col-md-5 control-label" for="id">รวมเงินฝากทั้งหมด</label><p><?=$fak_total?></p>

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

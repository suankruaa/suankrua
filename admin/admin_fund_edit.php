<?php
$page = 'Admin';
$title = 'Hello admin';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<!--end of page level css-->
EOT;
require_once('include/_header.php');
// `id_fund`, `fund_name`, `fund_detail`, `fund_money

if (isset($_POST["btnEdit"])) {
		$fid = $_POST["fid"]; //เก็บค่า id เก่า เพื่ออัพเดตข้อมูล
		$id_fund = $_POST["id_fund"];
		$fund_name = $_POST["fund_name"];
		$fund_detail = $_POST["fund_detail"];
		$fund_money = $_POST["fund_money"];

		$sql = "UPDATE fund SET id_fund='$id_fund', fund_name='$fund_name', fund_detail='$fund_detail', fund_money='$fund_money' WHERE id_fund='$fid'";
		// echo $sql;exit;
		$result = mysqli_query($link, $sql);

		// echo $result; exit;
		if ($result) {
			echo "<script type='text/javascript'>";
			echo "alert('แก้ไขข้อมูลสำเร็จ');";
			echo "window.location='funds.php';";
			echo "</script>";
			//header('location: admin_product.php');
		}else{
			echo "<font color='red'>SQL Error</font><hr>";
		}
	}else{
		$fid = $_GET["id_fund"];
		$sql = "SELECT * FROM fund WHERE id_fund='$fid'";
		$result = mysqli_query($link, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			$id_fund = $row["id_fund"];
			$fund_name = $row["fund_name"];
			$fund_detail = $row["fund_detail"];
			$fund_money = $row["fund_money"];
		}else{
			$id_fund = "";
			$fund_name = "";
			$fund_detail = "";
			$fund_money = "";
		}
	}
?>

<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
          แก้ไขข้อมูลกองทุน
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">แก้ไขข้อมูลกองทุน</a>
            </li>
            <li class="active">
                แก้ไขข้อมูลกองทุน
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
													แก้ไขข้อมูลกองทุน
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="admin_fund_edit.php" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label for="id" class="col-md-3 control-label">รหัสกองทุน</label>
                                    <div class="col-md-3">
                                    <input  name="id_fund" type="text" type="text" value="<?php echo "$id_fund"; ?>" class="form-control"></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">
                                        ชื่อกองทุน
                                    </label>
                                    <div class="col-md-3">
                                    <input  name="fund_name" type="text"  value="<?php echo "$fund_name"; ?>" class="form-control"></div>
                                </div>
                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="detail">
                                        รายละเอียดกองทุน
                                    </label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" name="fund_detail" rows="5"><?php echo "$fund_detail"; ?></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="money">
                                        จำนวนเงินเริ่มต้น
                                    </label>
                                    <div class="col-md-3">
                                        <input  name="fund_money" type="text" value="<?php echo "$fund_money"; ?>" class="form-control"></div>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
																			<input type="hidden" name="fid" value="<?=$id_fund?>">
                                      <button name="btnEdit" type="submit" value="แก้ไขข้อมูลกองทุน" class="btn btn-primary">บันทึก</button>
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

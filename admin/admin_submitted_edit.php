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
		//$fid = $_POST["fid"]; //เก็บค่า id เก่า เพื่ออัพเดตข้อมูล
		$id = $_POST["id"];
		$sub_id = $_POST["sub_id"];
		$mem_id = $_POST["mem_id"];
		$mem_name = $_POST["mem_name"];
		$sub_moneyloan = $_POST["sub_moneyloan"];
		$sub_objective = $_POST["sub_objective"];
		$sub_date = $_POST["sub_date"];
		$sub_idcardBM1 = $_POST["sub_idcardBM1"];
		$sub_status1 = $_POST["sub_status1"];
		$sub_idcardBM2 = $_POST["sub_idcardBM2"];
		$sub_status2 = $_POST["sub_status2"];
		$id_commit = $_POST["id_commit"];

		$sql = "UPDATE submitted SET sub_id='$sub_id', mem_id='$mem_id', mem_name='$mem_name', sub_moneyloan='$sub_moneyloan',
		sub_objective='$sub_objective',sub_date='$sub_date',sub_idcardBM1='$sub_idcardBM1',sub_status1='$sub_status1',sub_idcardBM2='$sub_idcardBM2',
		sub_status2='$sub_status2',id_commit='$id_commit'WHERE sub_id='$id'";
		// echo $sql;exit;
		$result = mysqli_query($link, $sql);

		// echo $result; exit;
		if ($result) {
			echo "<script type='text/javascript'>";
			echo "alert('แก้ไขข้อมูลสำเร็จ');";
			echo "window.location='submitted.php';";
			echo "</script>";
			//header('location: admin_product.php');
		}else{
			echo "<font color='red'>SQL Error</font><hr>";
		}
	}else{
		$id = $_GET["sub_id"];
		$sql = "SELECT * FROM submitted WHERE sub_id='$id'";
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
			$id_commit = $row["id_commit"];
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
          แก้ไขข้อมูลการยื่นกู้
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">แก้ไขข้อมูลการยื่นกู้</a>
            </li>
            <li class="active">
                แก้ไขข้อมูลการยื่นกู้
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
													แก้ไขข้อมูลการยื่นกู้
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="admin_fund_edit.php" method="post">
                            <fieldset>

                                <div class="form-group">
                                    <label for="id" class="col-md-3 control-label">รหัสการยื่นกู้</label>
                                    <div class="col-md-3">
                                    <input  name="sub_id" type="text" type="text" value="<?php echo "$sub_id"; ?>" class="form-control"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="id">รหัสสมาชิก</label>
                                    <div class="col-md-3">
                                    <input  name="mem_id" type="text"  value="<?php echo "$mem_id"; ?>" class="form-control"></div>
                                </div>

																<div class="form-group">
																		<label class="col-md-3 control-label" for="name">ชื่อ-สกุลสมาชิก</label>
																		<div class="col-md-3">
																				<input  name="mem_name" type="text"  value="<?php echo "$mem_name"; ?>" class="form-control"></div>
																		</div>

																<div class="form-group">
																		<label class="col-md-3 control-label" for="money">จำนวนเงินที่ขอกู้</label>
																		<div class="col-md-3">
																				<input  name="sub_moneyloan" type="text" value="<?php echo "$sub_moneyloan"; ?>" class="form-control">
																			</div>
																</div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">วัตถุประสงค์ในการขอกู้</label>
                                    <div class="col-md-3">
                                        <textarea class="form-control" name="sub_objective" rows="5"><?php echo "$sub_objective"; ?></textarea>
                                    </div>
                                </div>

																<div class="form-group">
																		<label class="col-md-3 control-label" for="birth">วันที่ยื่นกู้</label>
																		<div class="col-md-3">
																				<input type="date" id="datepicker" name="sub_date" class="form-control round-form" value="<?php echo "$sub_date"; ?>" >
																			</div>
																	</div>

																	<div class="form-group">
																			<label class="col-md-3 control-label" for="name">เลขที่บัตรผู้ค้ำประกันคนที่ 1</label>
																			<div class="col-md-3">
																					<input  name="sub_idcardBM1" type="text"  value="<?php echo "$sub_idcardBM1"; ?>" class="form-control">
																			</div>
																	</div>

																	<div class="form-group">
																			<label class="col-md-3 control-label" for="name">สถานะผู้ค้ำประกันคนที่ 1</label>
																			<div class="col-md-3">
																					<input  name="sub_status1" type="text"  value="<?php echo "$sub_status1"; ?>" class="form-control">
																			</div>
																	</div>

																	<div class="form-group">
																			<label class="col-md-3 control-label" for="name">เลขที่บัตรผู้ค้ำประกันคนที่ 2</label>
																			<div class="col-md-3">
																					<input  name="sub_idcardBM2" type="text"  value="<?php echo "$sub_idcardBM2"; ?>" class="form-control">
																			</div>
																	</div>

																	<div class="form-group">
																			<label class="col-md-3 control-label" for="name">สถานะผู้ค้ำประกันคนที่ 2</label>
																			<div class="col-md-3">
																					<input  name="sub_status2" type="text"  value="<?php echo "$sub_status2"; ?>" class="form-control">
																			</div>
																	</div>

																	<div class="form-group">
																		<label class="col-md-3 control-label" for="commit">ชื่อกรรมการ</label>
																		<div class="col-md-3">
																	<select class="form-control" name="id_commit" id="id_commit">
																					<?php
																						$sql="SELECT * FROM commits";
																						$result = mysqli_query($link, $sql);
																						while ($row=mysqli_fetch_array($result)){
																					?>
																					<option value="<?=$row['id_commit']?>"> <?=$row['name_commit']?></option>
																					<?php
																						}
																					?>
																					</select>
																				</div>
																	</div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">

																			<input type ="hidden" name="id" value="<?=$sub_id?>">
                                      <button name="btnEdit" type="submit" value="แก้ไขข้อมูลการยื่นกู้" class="btn btn-primary">บันทึก</button>
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

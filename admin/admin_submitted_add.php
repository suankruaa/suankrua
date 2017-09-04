<?php
$page = 'Admin';
$title = 'Hello Admin';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<!--end of page level css-->
EOT;
require_once('include/_header.php');
	if (isset($_POST["btnsubmit"])) {
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
			//$com_name = $_POST["com_name"];

			$sql = "INSERT INTO submitted (sub_id,mem_id,mem_name,sub_moneyloan,sub_objective,sub_date,sub_idcardBM1,sub_status1,sub_idcardBM2,sub_status2,id_commit)
							VALUES('$sub_id','$mem_id','$mem_name','$sub_moneyloan','$sub_objective','$sub_date','$sub_idcardBM1','$sub_status1','$sub_idcardBM2','$sub_status2','$id_commit')";
			$result = mysqli_query($link, $sql);
			if ($result) {
				echo "<script type='text/javascript'>";
				echo "alert('เพิมเสร็จแล้ว');";
				echo "window.location='submitted.php';";
				echo "</script>";
			}else{
				die("Query Failed" . mysqli_error($link));
			}
		}
?>


<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            เพิ่มข้อมูลการยื่นกู้กองทุน
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">ข้อมูลการยื่นกู้กองทุน</a>
            </li>
            <li class="active">
                เพิ่มข้อมูลการยื่นกองทุน
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
                <div class="panel panel-success" id="hidepanel1">
									<div class="panel-heading">
											<h3 class="panel-title"> <i class="livicon" data-name="plus" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
													เพิ่มการยื่นกู้
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="admin_submitted_add.php" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="id">รหัสการยื่นกู้</label>
                                    <div class="col-md-3">
                                    <input id="sub_id" name="sub_id" type="text" placeholder="ID" class="form-control"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">รหัสสมาชิก</label>
                                    <div class="col-md-3">
                                    <input id="mem_id" name="mem_id" type="text" placeholder="MEM-ID" class="form-control"></div>
                                </div>

																<div class="form-group">
                                    <label class="col-md-3 control-label" for="name">ชื่อ-สกุลสมาชิก</label>
                                    <div class="col-md-3">
                                    <input id="mem_name" name="mem_name" type="text" placeholder="MEM-NAME" class="form-control"></div>
                                </div>

																<div class="form-group">
                                    <label class="col-md-3 control-label" for="name">จำนวนเงินที่ขอกู้</label>
                                    <div class="col-md-3">
                                    <input id="sub_moneyloan" name="sub_moneyloan" type="text" placeholder="MONEY" class="form-control"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="detail">วัตถุประสงค์ในการกู้</label>
                                    <div class="col-md-4">
                                    <textarea class="form-control" id="sub_objective" name="sub_objective" placeholder="OBJECTIVE" rows="5"></textarea>
                                    </div>
                                </div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="birth">วันที่ยื่นกู้</label>
																<div class="col-md-3">
																<input type="date" id="datepicker" name="sub_date" class="form-control round-form"  placeholder="DATE"></div>
																</div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="money">เลขที่บัตร ปชช.ผู้ค้ำคนที่ 1</label>
                                    <div class="col-md-3">
                                    <input id="sub_idcardBM1" name="sub_idcardBM1" type="text" placeholder="IDCARDBM1" class="form-control"></div>
                                </div>

																<div class="form-group">
                                    <label class="col-md-3 control-label" for="money">สถานะผู้ค้ำคนที่ 1</label>
                                    <div class="col-md-3">
                                    <input id="sub_status1" name="sub_status1" type="text" placeholder="STATUS1" class="form-control"></div>
                                </div>

																<div class="form-group">
                                    <label class="col-md-3 control-label" for="money">เลขที่บัตร ปชช.ผู้ค้ำคนที่ 2</label>
                                    <div class="col-md-3">
                                    <input id="sub_idcardBM2" name="sub_idcardBM2" type="text" placeholder="IDCARDBM2" class="form-control"></div>
                                </div>

																<div class="form-group">
                                    <label class="col-md-3 control-label" for="money">สถานะผู้ค้ำคนที่ 2</label>
                                    <div class="col-md-3">
                                    <input id="sub_status2" name="sub_status2" type="text" placeholder="STATUS2" class="form-control"></div>
                                </div>

																<div class="form-group">
																	<label class="col-md-3 control-label" for="name">ชื่อกรรมการ</label>
																	<div class="col-md-3">
																<select class="form-control" name="id_commit" id="id_commit">
																				<option>--เลือก--</option>
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

                                <div class="form-group">
                                    <div class="col-md-12 text-right">

                                         <button type="submit" name="btnsubmit" value="send" class="btn btn-success">เพิ่ม</button>
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

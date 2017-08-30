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
			$pay_id = $POST["pay_id"];
			$mem_id = $POST["mem_id"];
			$mem_name = $POST["mem_name"];
			$mem_idcard = $POST["mem_idcard"];
			$pro_id = $POST["pro_id"];
			$pro_number = $POST["pro_number"];
			$pro_pice = $POST["pro_pice"];
			$date_sent = $POST["date_sent"];
			$pay_date = $POST["pay_date"];
			$pay_pice = $POST["pay_pice"];
			$id_committee = $POST["id_committee"];
			$com_name = $POST["com_name"];

			$sql = "INSERT INTO repayment (pay_id,mem_id,mem_name,mem_idcard,pro_id,pro_number,pro_pice,date_sent,pay_date,pay_pice,id_committee,com_name)
							VALUES('$pay_id','$mem_id','$mem_name','$mem_idcard','$pro_id','$pro_number','$pro_pice','$date_sent','$pay_date','$pay_pice','$id_committee','$com_name')";
			$result = mysqli_query($link, $sql);
			if ($result) {
				echo "<script type='text/javascript'>";
				echo "alert('เพิมเสร็จแล้ว');";
				echo "window.location='funds.php';";
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
            เพิ่มข้อมูลการจ่ายเงินกู้ให้ผู้กู้
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">ข้อมูลการจ่ายเงินกู้ให้ผู้กู้</a>
            </li>
            <li class="active">
                เพิ่มข้อมูลการจ่ายเงินกู้ให้ผู้กู้
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
													เพิ่มการจ่ายเงินกู้ให้ผู้กู้
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="admin_fund_add.php" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="id">รหัสการจ่ายเงินกู้</label>
                                    <div class="col-md-3">
                                    <input id="pay_id" name="pay_id" type="text" placeholder="ID" class="form-control"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="id">รหัสสมาชิก</label>
                                    <div class="col-md-3">
                                    <input id="mem_id" name="mem_id" type="text" placeholder="MEM-ID" class="form-control"></div>
                                </div>

																<div class="form-group">
                                    <label class="col-md-3 control-label" for="name">ชื่อ-สกุลสมาชิก</label>
                                    <div class="col-md-3">
                                    <input id="mem_name" name="mem_name" type="text" placeholder="MEM-NAME" class="form-control"></div>
                                </div>

																<div class="form-group">
                                    <label class="col-md-3 control-label" for="idcard">เลขที่บัตรประชาชนสมาชิก</label>
                                    <div class="col-md-3">
                                    <input id="mem_idcard" name="mem_idcard" type="text" placeholder="MEM-IDCARD" class="form-control"></div>
                                </div>

																<div class="form-group">
																		<label class="col-md-3 control-label" for="id">รหัสการทำสัญญา</label>
																		<div class="col-md-3">
																		<input id="pro_id" name="pro_id" type="text" placeholder="PRO-ID" class="form-control"></div>
																</div>

																<div class="form-group">
                                    <label class="col-md-3 control-label" for="number">เลขที่สัญญา</label>
                                    <div class="col-md-3">
                                    <input id="pro_number" name="pro_number" type="text" placeholder="PRO-NUMBER" class="form-control"></div>
                                </div>

																<div class="form-group">
                                    <label class="col-md-3 control-label" for="number">จำนวนเงินกู้</label>
                                    <div class="col-md-3">
                                    <input id="pro_pice" name="pro_pice" type="text" placeholder="MONEY" class="form-control"></div>
                                </div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="date">วันที่ครบกำหนดส่ง</label>
																<div class="col-md-3">
																<input type="date" id="datepicker" name="date_sent" class="form-control round-form"  placeholder="DATE"></div>
																</div>

																<div class="form-group">
																		<label class="col-md-3 control-label" for="number">เลขที่สัญญา</label>
																		<div class="col-md-3">
																		<input id="pro_number" name="pro_number" type="text" placeholder="PRO-NUMBER" class="form-control"></div>
																</div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="date">วันที่จ่ายเงินกู้</label>
																<div class="col-md-3">
																<input type="date" id="datepicker" name="pay_date" class="form-control round-form"  placeholder="DATE"></div>
																</div>

																<div class="form-group">
																		<label class="col-md-3 control-label" for="money">จำนวนเงินที่จ่าย</label>
																		<div class="col-md-3">
																		<input id="pay_pice" name="pay_pice" type="text" placeholder="MONEY" class="form-control"></div>
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

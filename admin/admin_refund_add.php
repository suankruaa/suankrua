<?php
$page = 'Admin';
$title = 'Hello admin';
$css = <<<EOT
<!--page level css -->
<!--page level css -->
<link rel="stylesheet" type="text/css" href="asset/vendors/datatables/css/select2.css" />
<link rel="stylesheet" type="text/css" href="asset/vendors/datatables/css/dataTables.bootstrap.css" />
<link href="asset/css/pages/tables.css" rel="stylesheet" type="text/css" />
<!--end of page level css--><!--end of page level css-->
EOT;
require_once('include/_header.php');

if (isset($_POST["btnsubmit"])) {

		$ref_id = $_POST["ref_id"];
		$mem_id = $_POST["mem_id"];
		$pro_pice = $_POST["pro_pice"];
		$ref_date = $_POST["ref_date"];
		$ref_moneytree = $_POST["ref_moneytree"];
		$ref_rate = $_POST["ref_rate"];
		$ref_picetotal = $_POST["ref_picetotal"];
		$ref_income = $_POST["ref_income"];
		$ref_out = $_POST["ref_out"];
		$id_commit = $_POST["id_commit"];




		$sql = "INSERT INTO refund (ref_id,mem_id,pro_pice,ref_date,ref_moneytree,ref_rate,ref_picetotal,ref_income,ref_out,id_commit)
		VALUES('$ref_id','$mem_id','$pro_pice','$ref_date','$ref_moneytree','$ref_rate','$ref_picetotal','$ref_income','$ref_out','$id_commit')";
		$result = mysqli_query($link, $sql);
		if ($result) {
			echo "<script type='text/javascript'>";
			echo "alert('เพิมเสร็จแล้ว');";
			echo "window.location='admin_refund_add.php';";
			echo "</script>";
			//header('location: admin_product.php');
		}else{
			die("Query Failed" . mysqli_error($link));
			// echo "<font color='red'>SQL Error</font><hr>";
		}
	}
?>



<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            ชำระเงินคืนและดอกเบี้ย
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">ข้อมูลการชำระเงินคืนและดอกเบี้ย</a>
            </li>
            <li class="active">
                เพิ่มข้อมูลการชำระเงินคืนและดอกเบี้ย
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
													ชำระเงินกู้
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#" method="post">
                            <fieldset>
                                <!-- Name input-->


																<div class="form-group">
                                <label class="col-md-3 control-label" for="id">รหัสสมาชิก</label>
                                <div class="col-md-3">
                                <input id="mem_id" name="mem_id" type="text" placeholder="MEM-ID" class="form-control"></div>
                                </div>

																<div class="form-group">
                                <label class="col-md-3 control-label" for="id">ชื่อ - สกุล</label>
                                <div class="col-md-3">
                                <input id="mem_name" name="mem_name" type="text" placeholder="MEM-NAME" class="form-control" readonly></div>
                                </div>


																<div class="form-group">
                                <label class="col-md-3 control-label" for="id">จำนวนเงินกู้</label>
                                <div class="col-md-3">
                                <input id="pro_pice" name="pro_pice" type="text" placeholder="PRO-PICE" class="form-control" readonly></div>
                                </div>

																<div class="form-group">
                                <label class="col-md-3 control-label" for="id">อัตราดอกเบี้ย</label>
                                <div class="col-md-3">
                                <input id="rate" name="rate" type="text" placeholder="RATE" class="form-control" readonly></div>
                                </div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="birth">วันที่รับชำระ</label>
																<div class="col-md-3">
																<input type="date" id="datepicker" name="ref_date" class="form-control round-form"  placeholder="REF-DATE"></div>
																</div>

                                <div class="form-group">
                                <label class="col-md-3 control-label" for="id">เงินต้นที่คืน</label>
                                <div class="col-md-3">
                                <input id="ref_moneytree" name="ref_moneytree" type="text" placeholder="REF-MONEY" class="form-control"></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                <label class="col-md-3 control-label" for="name">อัตราดอกเบี้ยที่ชำระ</label>
                                <div class="col-md-3">
                                <input id="ref_rate" name="ref_rate" type="text" placeholder="REF-RATE" class="form-control"></div>
                                </div>


																<div class="form-group">
																<label class="col-md-3 control-label" for="name">รวมเงินต้นและดอกเบี้ยที่ชำระ</label>
																<div class="col-md-3">
																<input id="ref_picetotal" name="ref_picetotal" type="text" placeholder="PRICE-TOTAL" class="form-control"></div>
																</div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="name">จำนวนเงินที่รับมา</label>
																<div class="col-md-3">
																<input id="ref_income" name="ref_income" type="text" placeholder="INCOME" class="form-control"></div>
																</div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="name">เงินทอน</label>
																<div class="col-md-3">
																<input id="ref_out" name="ref_out" type="text" placeholder="REF-OUT" class="form-control" readonly></div>
																</div>


                                <!-- Message body -->
																<div class="form-group">
																<label class="col-md-3 control-label" for="detail">ผู้รับชำระ</label>
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


																                      <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">

                                         <button type="submit" name="btnsubmit" value="send" class="btn btn-primary">บันทึก</button>
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

<?php
require_once('refund.php');
?>
<!-- right-side -->
<?php
require_once('include/_footer.php');
?>
<!-- begining of page level js -->
<script src="asset/vendors/jasny-bootstrap/js/jasny-bootstrap.js"></script>
<!-- end of page level js -->
</body>
</html>

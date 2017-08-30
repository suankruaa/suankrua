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
		$fak_date = $_POST["fak_date"];
		$mem_id = $_POST["mem_id"];
		$mem_name = $_POST["mem_name"];
		$id_commit = $_POST["id_commit"];
		//$fak_sum = $_POST["fak_sum"];
		$withdraw = $_POST["withdraw"];
		$fak_total = $_POST["fak_total"];


		$sql = "INSERT INTO deposit (fak_date,mem_id,id_commit,fak_sum,withdraw,fak_total)
		VALUES('$fak_date','$mem_id','$id_commit','','$withdraw','$fak_total')";
		$result = mysqli_query($link, $sql);
		if ($result) {
			echo "<script type='text/javascript'>";
			echo "alert('เพิมเสร็จแล้ว');";
			echo "window.location='admin_deposit_add.php';";
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
            เพิ่มข้อมูลการถอน
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">ข้อมูลการถอน</a>
            </li>
            <li class="active">
                เพิ่มข้อมูลการถอน
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
                <div class="panel panel-danger" id="hidepanel1">
									<div class="panel-heading">
											<h3 class="panel-title"> <i class="livicon" data-name="plus" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
													เพิ่มการถอน
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#" method="post">
                            <fieldset>
                                <!-- Name input-->

																<div class="form-group">
																<label class="col-md-3 control-label" for="birth">วันที่ถอน</label>
																<div class="col-md-3">
																<input type="date" id="datepicker" name="fak_date" class="form-control round-form"  placeholder="DATE"></div>
																</div>

                                <div class="form-group">
                                <label class="col-md-3 control-label" for="id">รหัสสมาชิก</label>
                                <div class="col-md-3">
                                <input id="mem_id" name="mem_id" type="text" placeholder="MEM-ID" class="form-control"></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                <label class="col-md-3 control-label" for="name">ชื่อผู้ถอน</label>
                                <div class="col-md-3">
                                <input id="mem_name" name="mem_name" type="text" placeholder="NAME" class="form-control" readonly></div>
                                </div>
                                <!-- Message body -->
																<div class="form-group">
																<label class="col-md-3 control-label" for="detail">ชื่อผู้รับถอน</label>
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
																<label class="col-md-3 control-label" for="pass">จำนวนเงินที่ต้องการถอน</label>
																<div class="col-md-3">
																<input id="fak_sum" name="withdraw" type="text" placeholder="RECIVER" class="form-control"></div>
																</div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="pass">รวมเงินฝากครั้งล่าสุด</label>
																<div class="col-md-3">
																<input id="fak_total" name="fak_total" type="text" placeholder="MONEY" class="form-control" readonly></div>
																</div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="pass">ยอดคงเหลือ</label>
																<div class="col-md-3">
																<input id="fak_total" name="fak_total" type="text" placeholder="TOTAL" class="form-control"></div>
																</div>
																                      <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">

                                         <button type="submit" name="btnsubmit" value="send" class="btn btn-danger">ถอน</button>
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
require_once('withdraw.php');
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

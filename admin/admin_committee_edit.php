<?php
$page = 'Admin';
$title = 'Hello admin';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />

<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<!--end of page level css-->
EOT;
require_once('include/_header.php');

if (isset($_POST["btnEdit"])) {
		$id_committee = $_POST["id_committee"];
		$com_idcard = $_POST["com_idcard"];
		$id_title = $_POST["id_title"];
		$com_name = $_POST["com_name"];
		$id_position = $_POST["id_position"];
		$com_birthday = $_POST["com_birthday"];
		$com_address = $_POST["com_address"];
		$com_tel = $_POST["com_tel"];
		$com_username = $_POST["com_username"];
		$com_password = $_POST["com_password"];


		$sql = "update committee set id_committee='$id_committee', com_idcard='$com_idcard', id_title='$id_title',
		com_name='$com_name', id_position='$id_position', com_birthday='$com_birthday', com_address='$com_address',
		com_tel='$com_tel', com_username='$com_username', com_password='$com_password'
		where id_committee='$id_committee'";

		$result = mysqli_query($link, $sql);
		if ($result) {
			echo "<script type='text/javascript'>";
			echo "alert('แก้ไขเสร็จแล้ว');";
			echo "window.location='committee.php';";
			echo "</script>";
			//header('location: admin_product.php');
		}else{
			echo "<font color='red'>SQL Error</font><hr>";
		}
	}else{
		$id_committee = $_GET["id_committee"];
		$sql = "select * from committee where id_committee='$id_committee'";
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
			$com_password = $row["com_password"];
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
			$com_password = "";
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
													แก้ไขข้อมูลกรรมการ
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="id">รหัสกรรมการ</label>
                                    <div class="col-md-3">
                                        <input  name="id_committee" type="text" value="<?php echo "$id_committee"; ?>" class="form-control"></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">เลขประจำตัวประชาชน</label>
                                    <div class="col-md-3">
                                        <input name="com_idcard" type="text" value="<?php echo "$com_idcard"; ?>" class="form-control"></div>
                                </div>
                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="detail">คำนำหน้าชื่อ</label>
                                    <div class="col-md-6">
													<!--						<div id="div_title"></div>  -->

																		<select name="id_title" value="<?php echo "$id_title"; ?>">
																		<option value="">--เลือก--</option>
            												<option value="นาย">นาย</option>
            												<option value="นางสาว">นางสาว</option>
																		<option value="นาง">นาง</option>
          													</select>

																			</div>
																		</div>

																		<div class="form-group">
		                                    <label class="col-md-3 control-label" for="name">ชื่อ-สกุล</label>
		                                    <div class="col-md-3">
		                                        <input  name="com_name" type="text" value="<?php echo "$com_name"; ?>" class="form-control"></div>
		                                </div>

																						<div class="form-group">
				                                    <label class="col-md-3 control-label" for="detail">ตำแหน่ง</label>
				                                    <div class="col-md-6">
																	<!--						<div id="div_title"></div>  -->

																						<select name="id_position" id="id_position">
																							<option value="">--เลือก--</option>
																						<option value="ประธาน">ประธาน</option>
				            												<option value="รองประธาน">รองประธาน</option>
																						<option value="เลขานุการ">เลขานุการ</option>
																						<option value="เหรัญญิก">เหรัญญิก</option>
																						<option value="ผู้ทรงคุณวุฒิ">ผู้ทรงคุณวุฒิ</option>
																						<option value="ปฏิคม">ปฏิคม</option>
																						<option value="กรรมการ">กรรมการ</option>


				          													</select>

																							</div>
																						</div>

																					<div class="form-group">
			                                    <label class="col-md-3 control-label" for="birth">วันเกิด</label>
			                                    <div class="col-md-3">
	                                        <input type="date" id="datepicker" name="com_birthday" class="form-control round-form" value="<?php echo "$com_birthday"; ?>" ></div>

																					  </div>


                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="money">ที่อยู่</label>
                                    <div class="col-md-3">
                                        <input  name="com_address" type="text" value="<?php echo "$com_address"; ?>" class="form-control"></div>
                                </div>

																<div class="form-group">
																		<label class="col-md-3 control-label" for="name">เบอร์โทร</label>
																		<div class="col-md-3">
																				<input  name="com_tel" type="text" value="<?php echo "$com_tel"; ?>" class="form-control"></div>
																</div>

																<div class="form-group">
																		<label class="col-md-3 control-label" for="name">ชื่อผู้ใช้</label>
																		<div class="col-md-3">
																				<input  name="com_username" type="text" value="<?php echo "$com_username"; ?>" class="form-control" readonly></div>
																</div>

																<div class="form-group">
																		<label class="col-md-3 control-label" for="name">รหัสผ่าน</label>
																		<div class="col-md-3">
																				<input  name="com_password" type="text" value="<?php echo "$com_password"; ?>" class="form-control" readonly></div>
																</div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">

																			<button name="btnEdit" type="submit" value="แก้ไขข้อมูลกรรมการ" class="btn btn-primary">บันทึก</button>

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
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<!-- end of page level js -->
</body>
</html>

<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>

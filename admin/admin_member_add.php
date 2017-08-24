<?php
$page = 'Admin';
$title = 'Hello admin';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />


<!--end of page level css-->
EOT;
require_once('include/_header.php');

if (isset($_POST["btnsubmit"])) {
	$mem_id = $_POST["mem_id"];
	$mem_idcard = $_POST["mem_idcard"];
	$id_gender = $_POST["id_gender"];
	$id_title = $_POST["id_title"];
	$mem_name = $_POST["mem_name"];
	$mem_birthday = $_POST["mem_birthday"];
	$id_status = $_POST["id_status"];
	$mem_occupation = $_POST["mem_occupation"];
	$mem_address = $_POST["mem_address"];
	$mem_tel = $_POST["mem_tel"];
	$mem_email = $_POST["mem_email"];
	$mem_username = $_POST["mem_username"];
	$mem_password = $_POST["mem_password"];


		$sql = "INSERT INTO member (mem_id,mem_idcard,id_gender,id_title,mem_name,mem_birthday,id_status,
												mem_occupation,mem_address,mem_tel,mem_email,mem_username,mem_password)
						VALUES('$mem_id','$mem_idcard','$id_gender','$id_title','$mem_name','$mem_birthday','$id_status',
									 '$mem_occupation','$mem_address','$mem_tel','$mem_email','$mem_username','$mem_password')";
		$result = mysqli_query($link, $sql);
		if ($result) {
			echo "<script type='text/javascript'>";
			echo "alert('เพิมเสร็จแล้ว');";
			echo "window.location='member.php';";
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
            เพิ่มข้อมูลสมาชิก
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">ข้อมูลสมาชิก</a>
            </li>
            <li class="active">
                เพิ่มข้อมูลสมาชิก
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
													เพิ่มสมาชิก
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                <label class="col-md-3 control-label" for="id">รหัสสมาชิก</label>
                                <div class="col-md-3">
                                <input id="mem_id" name="mem_id" type="text" placeholder="AUTO-ID" class="form-control" readonly></div>
                                </div>

                                <div class="form-group">
                                <label class="col-md-3 control-label" for="name">เลขประจำตัวประชาชน</label>
                                <div class="col-md-3">
                                <input id="mem_idcard" name="mem_idcard" type="text" placeholder="IDCARD" class="form-control"></div>
                                </div>

																<div class="form-group">
                                    <label class="col-md-3 control-label" for="detail">เพศ</label>
                                    <div class="col-md-6">
																		<select name="id_gender" id="id_gender">
																		<option value="">--เลือก--</option>
            												<option value="ชาย">ชาย</option>
            												<option value="หญิง">หญิง</option>
          													</select>
																		</div>
																		</div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="detail">คำนำหน้าชื่อ</label>
                                    <div class="col-md-6">
																		<select name="id_title" id="id_title">
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
		                                <input id="mem_name" name="mem_name" type="text" placeholder="NAME" class="form-control"></div>
		                                </div>

																					<div class="form-group">
			                                    <label class="col-md-3 control-label" for="birth">วันเกิด</label>
			                                    <div class="col-md-3">
	                                        <input type="date" id="datepicker" name="mem_birthday" class="form-control round-form"  placeholder="DATE"></div>
																					</div>

																					<div class="form-group">
																							<label class="col-md-3 control-label" for="status">สถานภาพ</label>
																							<div class="col-md-6">

																							<select name="id_status" id="id_status">
																							<option value="">--เลือก--</option>
																							<option value="โสด">โสด</option>
																							<option value="สมรส">สมรส</option>
																							<option value="หม้าย">หม้าย</option>
																							<option value="อย่าร้าง">อย่าร้าง</option>
																							</select>
																								</div>
																							</div>

																							<div class="form-group">
																							<label class="col-md-3 control-label" for="occupation">อาชีพ</label>
																							<div class="col-md-3">
																							<input id="mem_occupation" name="mem_occupation" type="text" placeholder="OCCUPATION" class="form-control"></div>
																							</div>

                                <div class="form-group">
                                <label class="col-md-3 control-label" for="address">ที่อยู่</label>
                                <div class="col-md-3">
                                <input id="mem_address" name="mem_address" type="text" placeholder="ADDRESS" class="form-control"></div>
                                </div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="tel">เบอร์โทร</label>
																<div class="col-md-3">
																<input id="mem_tel" name="mem_tel" type="text" placeholder="TEL" class="form-control"></div>
																</div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="email">อีเมล</label>
																<div class="col-md-3">
																<input id="mem_email" name="mem_email" type="email" placeholder="example@domain.com" class="form-control"></div>
																</div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="user">ชื่อผู้ใช้</label>
																<div class="col-md-3">
																<input id="mem_username" name="mem_username" type="text" placeholder="USERNAME" class="form-control"></div>
																</div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="pass">รหัสผ่าน</label>
																<div class="col-md-3">
																<input id="mem_password" name="mem_password" type="text" placeholder="PASSWORD" class="form-control"></div>
																</div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">

                                         <button type="submit" name="btnsubmit" value="send" class="btn btn-primary">เพิ่มสมาชิก</button>
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

<script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>

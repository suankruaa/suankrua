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
		$status_mem = $_POST["status_mem"];

		$sql = "UPDATE member SET mem_id='$mem_id', mem_idcard='$mem_idcard',id_gender='$id_gender', id_title='$id_title',
		mem_name='$mem_name',mem_birthday='$mem_birthday',id_status='$id_status',mem_occupation='$mem_occupation', mem_address='$mem_address',
		mem_tel='$mem_tel',mem_email='$mem_email', mem_username='$mem_username', mem_password='$mem_password',status_mem='$status_mem'
		WHERE mem_id='$mem_id'";

		$result = mysqli_query($link, $sql);
		if ($result) {
			echo "<script type='text/javascript'>";
			echo "alert('แก้ไขเสร็จแล้ว');";
			echo "window.location='member.php';";
			echo "</script>";
			//header('location: admin_product.php');
		}else{
			echo "<font color='red'>SQL Error</font><hr>";
		}
	}else{
		$mem_id = $_GET["mem_id"];
		$sql = "SELECT * FROM member WHERE mem_id='$mem_id'";
		$result = mysqli_query($link, $sql);
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			$mem_id = $row["mem_id"];
			$mem_idcard = $row["mem_idcard"];
			$id_gender = $row["id_gender"];
			$id_title = $row["id_title"];
			$mem_name = $row["mem_name"];
			$mem_birthday = $row["mem_birthday"];
			$id_status = $row["id_status"];
			$mem_occupation = $row["mem_occupation"];
			$mem_address = $row["mem_address"];
			$mem_tel = $row["mem_tel"];
			$mem_email = $row["mem_email"];
			$mem_username = $row["mem_username"];
			$mem_password = $row["mem_password"];
			$status_mem = $row["status_mem"];
		}else{
			$mem_id = "";
			$mem_idcard = "";
			$id_gender = "";
			$id_title = "";
			$mem_name = "";
			$mem_birthday = "";
			$id_status = "";
			$mem_occupation = "";
			$mem_address = "";
			$mem_tel = "";
			$mem_email = "";
			$mem_username = "";
			$mem_password = "";
			$status_mem = "";
		}
	}
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!--section starts-->
        <h1>
            แก้ไขข้อมูลสมาชิก
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">แก้ไขข้อมูลสมาชิก</a>
            </li>
            <li class="active">
                แก้ไขข้อมูลสมาชิก
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
													แก้ไขข้อมูลสมาชิก
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="#" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                <label class="col-md-3 control-label" for="id">รหัสสมาชิก</label>
                                <div class="col-md-3">
                                <input  name="mem_id" type="text" value="<?php echo "$mem_id"; ?>" class="form-control"readonly></div>
                                </div>

                                <div class="form-group">
                                <label class="col-md-3 control-label" for="idcard">เลขประจำตัวประชาชน</label>
                                <div class="col-md-3">
                                <input name="mem_idcard" type="text" value="<?php echo "$mem_idcard"; ?>" class="form-control"></div>
                                </div>

																<div class="form-group">
																		<label class="col-md-3 control-label" for="gender">เพศ</label>
																		<div class="col-md-3">
																			<select class="form-control" name="id_gender" id="id_gender">
																				<?php
																					$sql="SELECT * FROM gender";
																					$result = mysqli_query($link, $sql);
																					while ($row=mysqli_fetch_array($result)){
																				?>
																				<option value="<?=$row['id_gender']?>"> <?=$row['gender_name']?></option>
																				<?php
																					}
																				?>
																				</select>
																			</div>
																		</div>

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="nam">คำนำหน้าชื่อ</label>
                                    <div class="col-md-3">
																			<select class="form-control" name="id_title" id="id_title">
																				<?php
																					$sql="SELECT * FROM title";
																					$result = mysqli_query($link, $sql);
																					while ($row=mysqli_fetch_array($result)){
																				?>
																				<option value="<?=$row['id_title']?>"> <?=$row['title']?></option>
																				<?php
																					}
																				?>
																				</select>
																			</div>
																		</div>

																		<div class="form-group">
		                                <label class="col-md-3 control-label" for="name">ชื่อ-สกุล</label>
		                                <div class="col-md-3">
		                                <input  name="mem_name" type="text" value="<?php echo "$mem_name"; ?>" class="form-control"></div>
		                                </div>

																		<div class="form-group">
																		<label class="col-md-3 control-label" for="birth">วันเกิด</label>
																		<div class="col-md-3">
																		<input type="date" id="datepicker" name="mem_birthday" class="form-control round-form" value="<?php echo "$mem_birthday"; ?>" ></div>
																		</div>

																						<div class="form-group">
				                                    <label class="col-md-3 control-label" for="status">สถานภาพ</label>
				                                    <div class="col-md-3">
																							<select class="form-control" name="id_status" id="id_status">
																								<?php
																									$sql="SELECT * FROM status";
																									$result = mysqli_query($link, $sql);
																									while ($row=mysqli_fetch_array($result)){
																								?>
																								<option value="<?=$row['id_status']?>"> <?=$row['status_name']?></option>
																								<?php
																									}
																								?>
																								</select>
																							</div>
																						</div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="occupation">อาชีพ</label>
																<div class="col-md-3">
																<input  name="mem_occupation" type="text" value="<?php echo "$mem_occupation"; ?>" class="form-control"></div>
																</div>

                                <div class="form-group">
                                <label class="col-md-3 control-label" for="address">ที่อยู่</label>
                                <div class="col-md-3">
                                <input  name="mem_address" type="text" value="<?php echo "$mem_address"; ?>" class="form-control"></div>
                                </div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="tel">เบอร์โทร</label>
																<div class="col-md-3">
																<input  name="mem_tel" type="text" value="<?php echo "$mem_tel"; ?>" class="form-control"></div>
																</div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="email">อีเมล</label>
																<div class="col-md-3">
																<input  name="mem_email" type="text" value="<?php echo "$mem_email"; ?>" class="form-control"></div>
																</div>

																<div class="form-group">
																<label class="col-md-3 control-label" for="user">ชื่อผู้ใช้</label>
																<div class="col-md-3">
																<input  name="mem_username" type="text" value="<?php echo "$mem_username"; ?>" class="form-control" readonly></div>
																</div>

																<div class="form-group">
															  	<label class="col-md-3 control-label" for="pass">รหัสผ่าน</label>
																	<div class="col-md-3">
																		<input  name="mem_password" type="text" value="<?php echo "$mem_password"; ?>" class="form-control" readonly>
																	</div>
																</div>

																<div class="form-group">
																	<label class="col-lg-3 control-label" for="select">Status</label>
																	<div class="col-lg-3">
																		<select class="form-control" name="status_mem" id="select">
																			<option value="<?=$status_mem?>" ><?=$status_mem?></option>
																			<option value="publish" >สมาชิก</option>
																			<option value="unpublish" >ยกเลิกเป็นสมาชิก</option>
																		</select>
																	</div>
																</div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">
																			<button name="btnEdit" type="submit" value="แก้ไขข้อมูลสมาชิก" class="btn btn-primary">บันทึก</button>
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

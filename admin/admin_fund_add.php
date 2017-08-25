<?php
$page = 'User';
$title = 'Hello user';
$css = <<<EOT
<!--page level css -->
<link href="asset/vendors/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet" />
<!--end of page level css-->
EOT;
require_once('include/_header.php');
	if (isset($_POST["btnsubmit"])) {
			$id_fund = $_POST["id_fund"];
			$fund_name = $_POST["fund_name"];
			$fund_detail = $_POST["fund_detail"];
			$fund_money = $_POST["fund_money"];

			$sql = "INSERT INTO fund (id_fund,fund_name,fund_detail,fund_money) VALUES('$id_fund','$fund_name','$fund_detail','$fund_money')";
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
            เพิ่มข้อมูลกองทุน
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">ข้อมูลกองทุน</a>
            </li>
            <li class="active">
                เพิ่มข้อมูลกองทุน
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
													เพิ่มกองทุน
											</h3>
										</div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="admin_fund_add.php" method="post">
                            <fieldset>
                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="id">รหัสกองทุน</label>
                                    <div class="col-md-3">
                                        <input id="id_fund" name="id_fund" type="text" placeholder="ID" class="form-control"></div>
                                </div>
                                <!-- Email input-->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="name">
                                        ชื่อกองทุน
                                    </label>
                                    <div class="col-md-3">
                                        <input id="fund_name" name="fund_name" type="text" placeholder="NAME" class="form-control"></div>
                                </div>
                                <!-- Message body -->
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="detail">
                                        รายละเอียดกองทุน
                                    </label>
                                    <div class="col-md-6">
                                        <textarea class="form-control" id="fund_detail" name="fund_detail" placeholder="DETAIL" rows="5"></textarea>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="money">
                                        จำนวนเงินเริ่มต้น
                                    </label>
                                    <div class="col-md-3">
                                        <input id="fund_money" name="fund_money" type="text" placeholder="MONEY" class="form-control"></div>
                                </div>
                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-12 text-right">

                                         <button type="submit" name="btnsubmit" value="send" class="btn btn-primary">เพิ่ม</button>
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

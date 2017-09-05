<?php
$page = 'Admin';
$title = 'Hello admin';
$css = <<<EOT

<!--page level css -->
<link rel="stylesheet" type="text/css" href="asset/vendors/datatables/css/select2.css" />
<link rel="stylesheet" type="text/css" href="asset/vendors/datatables/css/dataTables.bootstrap.css" />
<link href="asset/css/pages/tables.css" rel="stylesheet" type="text/css" />

<!--end of page level css--><!--end of page level css-->
EOT;
require_once('include/_header.php');
?>
<link rel="stylesheet" type="text/css" href="asset/css/jquery-ui.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<!-- <link rel="stylesheet" type="text/css" href="css/main.css" /> -->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="asset/js/jquery-ui.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<?php
if (isset($_POST["btnsubmit"])) {

		$fak_date = $_POST["fak_date"];
		$mem_id = $_POST["mem_id"];
		$mem_name = $_POST["mem_name"];
		$id_commit = $_POST["id_commit"];
		$fak_sum = $_POST["fak_sum"];
		//$withdraw = $_POST["withdraw"];
		$fak_total = $_POST["fak_total"];


		$sql = "INSERT INTO deposit (fak_date,mem_id,id_commit,fak_sum,withdraw,fak_total)
		VALUES('$fak_date','$mem_id','$id_commit','$fak_sum','','$fak_total')";
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
            เพิ่มข้อมูลการฝาก
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">ข้อมูลการฝาก</a>
            </li>
            <li class="active">
                เพิ่มข้อมูลการฝาก
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
													เพิ่มการฝาก
											</h3>
										</div>
                    <div class="panel-body">

											<form class="form-horizontal" action="admin_deposit_add.php" method="post" name="fak" id="fak" >
											    <fieldset>
											        <!-- Name input-->

											        <div class="form-group">
											        <label class="col-md-3 control-label" for="birth">วันที่ฝาก</label>
											        <div class="col-md-3">
											        <input type="date" id="datepicker" name="fak_date" class="form-control round-form"  placeholder="DATE"></div>
											        </div>

											        <div class="form-group">
											        <label class="col-md-3 control-label" for="id">รหัสสมาชิก</label>
											        <div class="col-md-3">
											        <input id="user_id_mem" name="mem_id" type="text" placeholder="MEM-ID" class="form-control" readonly></div>
											        </div>
											        <!-- Email input-->
											        <div class="form-group">
											        <label class="col-md-3 control-label" for="name">ชื่อผู้ฝาก</label>
											        <div class="col-md-3">
											        <input id="countryname_1" name="mem_name" type="text" placeholder="NAME" class="form-control"></div>
											        </div>
											        <!-- Message body -->
											        <div class="form-group">
											        <label class="col-md-3 control-label" for="detail">ชื่อผู้รับฝาก</label>
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
											        <label class="col-md-3 control-label" for="pass">จำนวนเงินฝาก</label>
											        <div class="col-md-3">
											        <input id="num1" name="fak_sum" type="text" placeholder="RECIVER" class="form-control"></div>
											        </div>

											        <div class="form-group">
											        <label class="col-md-3 control-label" for="pass">ยอดยกมา</label>
											        <div class="col-md-3">
											        <input id="num2" name="fak_total" type="text" placeholder="MONEY" class="form-control" readonly value=""></div>
											        </div>

											        <div class="form-group">
											        <label class="col-md-3 control-label" for="pass">รวมเป็นเงิน</label>
											        <div class="col-md-3">
											        <input id="sum" name="fak_total" type="text" placeholder="TOTAL" class="form-control" readonly value=""></div>
											        </div>
											                              <!-- Form actions -->
											        <div class="form-group">
											            <div class="col-md-12 text-right">

											                 <button type="submit" name="btnsubmit" value="send" class="btn btn-primary">ฝาก</button>
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
require_once('deposit.php');
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
<script type="text/javascript">
	$('#countryname_1').autocomplete({
		source: function( request, response ) {
			$.ajax({
				url : 'ajax.php',
				dataType: "json",
				method: 'post',
			data: {
				 name_startsWith: request.term,
				 type: 'country_table',
				 row_num : 1
			},
			success: function( data ) {
				response( $.map( data, function( item ) {
					var code = item.split("|");
						return {
							label: code[0],
							value: code[0],
							data : item
						}
				}));
			}
			});
		},
		autoFocus: true,
		minLength: 0,
		select: function( event, ui ) {
		var names = ui.item.data.split("|");
		$('#user_id_mem').val(names[1]);
		$('#num2').val(names[2]);
	}
	});

</script>
<script type="text/javascript">
$(function() {
    $("#num1, #num2").on("keydown keyup", sum);
	function sum() {
	$("#sum").val(Number($("#num2").val()) + Number($("#num1").val()));
	}
});
</script>

<?php
$page = 'blank';
$title = 'Blank Page';
$css = <<<EOT
EOT;
require_once('include/_header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          ข้อมูลกองทุนหมู่บ้าน
        </h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="18" data-loop="true"></i>
                    Home
                </a>
            </li>
            <li>
                <a href="#">DataTables</a>
            </li>
            <li class="active">
                Editable Datatables
            </li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Second Data Table -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box default">
                    <div class="portlet-title">
                        <div class="caption"> <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                          ตารางข้อมูลกองทุนหมู่บ้าน
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="btn-group">
                              <a href="admin_fund_add.php"   class=" btn btn-custom">
                                    เพิ่ม
                                    <i class="fa fa-plus"></i>
                                </button> </a>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle btn-custom" data-toggle="dropdown">
                                    Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="#">Print</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Save as PDF
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Export to Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="sample_editable_1_wrapper" class="">
                            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_editable_1" role="grid">
                                <thead>
                                    <tr role="row">

                                        <th>รหัสกองทุน</th>
                                        <th>ชื่อกองทุน</th>
                                        <th>รายละเอียดกองทุน</th>
                                        <th>จำนวนเงินเริ่มต้น</th>
                                        <th>แก้ไข</th>
                                        <th>ลบ</th>

                                    </tr>
                                </thead>
                                <tbody>
						<?php
							if (isset($_GET["id_fund"])) {
								$id_fund = $_GET["id_fund"];
								$sql = "delete from fund where id_fund='$id_fund'";
								$result = mysqli_query($link, $sql);
							}

							$sql = "select * from fund";
							$result = mysqli_query($link, $sql);
							while ($row = mysqli_fetch_array($result)){
								$id_fund = $row["id_fund"];
								$fund_name = $row["fund_name"];
								$fund_detail = $row["fund_detail"];
								$fund_money = $row["fund_money"];

								echo "<tr>
										<td>$id_fund</td>
										<td>$fund_name</td>
										<td>$fund_detail</td>
										<td>$fund_money</td>
										<td><a href='admin_fund_edit.php?id_fund=$id_fund'>แก่ไข้</a></td>
										<td><a href='funds.php?id_fund=$id_fund' onclick='return confirm(\"ยืนยันการลบ\");'>ลบ</a></td>
									</tr>";
							}
						?>
					</tbody>
                            </table>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET--> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
</aside>
<!-- right-side -->
<?php
require_once('include/_footer.php');
?>


<script type="text/javascript" src="asset/vendors/datatables/select2.min.js"></script>
<script type="text/javascript" src="asset/vendors/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="asset/vendors/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="asset/js/pages/table-editable.js"></script>
</body>
</html>

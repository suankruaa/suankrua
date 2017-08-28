<?php
$page = 'Admin';
$title = 'Admin Page';
$css = <<<EOT
<!--page level css -->
<link rel="stylesheet" type="text/css" href="asset/vendors/datatables/css/select2.css" />
<link rel="stylesheet" type="text/css" href="asset/vendors/datatables/css/dataTables.bootstrap.css" />
<link href="asset/css/pages/tables.css" rel="stylesheet" type="text/css" />
<!--end of page level css-->
EOT;
require_once('include/_header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <!-- Second Data Table -->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet box default">

                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="btn-group">
                              <a href="admin_withdraw_add.php"   class=" btn btn-custom">
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

                                        <th>รหัสสมาชิก</th>
                                        <th>วันที่ฝาก</th>
                                        <th>ชื่อผู้ฝาก</th>
                                        <th>ชื่อผู้รับฝาก</th>
                                        <th>ฝาก</th>
                                        <th>ถอน</th>
                                        <th>ยอดเงินคงเหลือ</th>

                                        <th>ดูข้อมูล</th>

                                    </tr>
                                </thead>
                                <tbody>
						<?php
							if (isset($_GET["fak_id"])) {
								$fak_id = $_GET["fak_id"];
								$sql = "DELETE FROM deposit WHERE fak_id='$fak_id'";
								$result = mysqli_query($link, $sql);
							}

							$sql = "SELECT DISTINCT deposit.mem_id,
              member.mem_name,
              deposit.fak_date,
              deposit.fak_sum,
              deposit.withdraw,
              deposit.fak_total,
              commits.name_commit
              FROM deposit left JOIN member
              ON deposit.mem_id = member.mem_id
              left JOIN commits
              ON deposit.id_commit = commits.id_commit
              order by deposit.mem_id asc
              ";
							$result = mysqli_query($link, $sql);
							while ($row = mysqli_fetch_array($result)){
								$mem_id = $row["mem_id"];
								$fak_date = $row["fak_date"];
								$mem_name = $row["mem_name"];
								$name_commit = $row["name_commit"];
                $fak_sum = $row["fak_sum"];
                $withdraw = $row["withdraw"];
                $fak_total = $row["fak_total"];

								echo "<tr>
										<td>$mem_id</td>
										<td>$fak_date</td>
										<td>$mem_name</td>
										<td>$name_commit</td>
                    <td>$fak_sum</td>
                    <td>$withdraw</td>
                    <td>$fak_total</td>

                    <td><a href='admin_deposit_view.php?mem_id=$mem_id' class='btn info btn-xs purple'><i class='fa fa-eye'></i></a></td>
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

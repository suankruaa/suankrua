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
                              <a href="admin_refund_add.php"   class=" btn btn-custom">
                                  ชำระเงิน
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

                                        <th>รหัสการรับชำระ</th>
                                        <th>รหัสสมาชิก</th>
                                        <th>ชื่อ-สกุล</th>
                                        <th>รวมเงินที่คืนทั้งหมด</th>
                                        <th>วันที่รับชำระ</th>
                                        <th>ดูข้อมูล</th>

                                    </tr>
                                </thead>
                                <tbody>
						<?php
							if (isset($_GET["ref_id"])) {
								$ref_id = $_GET["ref_id"];
								$sql = "DELETE FROM refund WHERE ref_id='$ref_id'";
								$result = mysqli_query($link, $sql);
							}

							$sql = "SELECT refund.ref_id,
              refund.mem_id,
              member.mem_name,
              refund.ref_picetotal,
              refund.ref_date
              FROM refund LEFT JOIN member
              ON refund.mem_id=member.mem_id";
							$result = mysqli_query($link, $sql);
							while ($row = mysqli_fetch_array($result)){
								$ref_id = $row["ref_id"];
								$mem_id = $row["mem_id"];
								$mem_name = $row["mem_name"];
                $ref_picetotal = $row["ref_picetotal"];
                $ref_date = $row["ref_date"];



								echo "<tr>
										<td>$ref_id</td>
										<td>$mem_id</td>
										<td>$mem_name</td>
                    <td>$ref_picetotal</td>
                    <td>$ref_date</td>

                    <td><a href='admin_refund_view.php?mem_id=$mem_id' class='btn info btn-xs purple'><i class='fa fa-eye'></i></a></td>
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

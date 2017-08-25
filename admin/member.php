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
    <section class="content-header">
        <h1>
          ข้อมูลสมาชิก
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
              ข้อมูลสมาชิก
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
                          ตารางข้อมูลสมาชิก
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <!--<div class="btn-group">
                              <a href="admin_member_add.php"   class=" btn btn-custom">
                                    เพิ่ม
                                    <i class="fa fa-plus"></i>
                                </button> </a>
                            </div>-->
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
                                        <th>คำนำหน้าชื่อ</th>
                                        <th>ชื่อ-สกุล</th>
                                        <th>วัน/เดือน/ปีเกิด</th>
                                        <th>เบอร์โทร</th>
                                        <th>จัดการข้อมูล</th>
                                    </tr>
                                </thead>
                                <tbody>
						<?php
							if (isset($_GET["mem_id"])) {
								$mem_id = $_GET["mem_id"];
								$sql = "delete from member where mem_id='$mem_id'";
								$result = mysqli_query($link, $sql);
							}

							$sql = "select * from  member";
							$result = mysqli_query($link, $sql);
							while ($row = mysqli_fetch_array($result)){
								$mem_id = $row["mem_id"];
								$id_title = $row["id_title"];
								$mem_name = $row["mem_name"];
								$mem_birthday = $row["mem_birthday"];
                $mem_tel = $row["mem_tel"];

								echo "<tr>
										<td>$mem_id</td>
										<td>$id_title</td>
										<td>$mem_name</td>
										<td>$mem_birthday</td>
                    <td>$mem_tel</td>

                    <td><a href='admin_member_edit.php?mem_id=$mem_id' class='btn default btn-xs purple'><i class='fa fa-edit'></i></a> |
                    <a href='admin_member_view.php?mem_id=$mem_id' class='btn info btn-xs purple'><i class='fa fa-eye'></i></a> |
                    <a href='member.php?mem_id=$mem_id' class='btn warning btn-xs purple'><i class='fa fa-trash-o' onclick='return confirm(\"ยืนยันการลบ\");'></a></td>
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

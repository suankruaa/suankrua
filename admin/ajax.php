<?php
require_once 'include/connect.php';
if($_POST['type'] == 'country_table'){
	$row_num = $_POST['row_num'];
	$result = mysqli_query($link, "SELECT mem_name, member.mem_id, deposit.fak_total FROM member LEFT JOIN deposit ON member.mem_id = deposit.mem_id  where mem_name LIKE '".strtoupper($_POST['name_startsWith'])."%' ORDER BY fak_id DESC LIMIT 1");
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$name = $row['mem_name'].'|'.$row['mem_id'].'|'.$row['fak_total'].'|'.$row_num;
		array_push($data, $name);
	}
	echo json_encode($data);
}

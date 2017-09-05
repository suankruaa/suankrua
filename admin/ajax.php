<?php
require_once 'include/connect.php';
if ($_POST['type'] == 'fund') {
  $row_num = $_POST['row_num'];

    $result= mysqli_query($link,"SELECT * FROM member WHERE mem_name LIKE ' ".strtoupper($_POST['name_startsWith'])."%'");
    $date = array();
    while ($row = mysqli_fetch_assoc($result)){
      $name = $row['mem_id'].'|'.$row['fak_total'].'|'.$row_num;
    }
    echo json_encode($date);

    // $result = ($link, $sql);
    // while ($row=mysqli_fetch_array($result)){

}

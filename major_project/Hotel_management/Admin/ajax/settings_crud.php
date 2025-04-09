<?php
require('../include/config.php');
require('../include/essential.php');
adminLogin();


header('Content-Type: application/json');
if(isset($_POST['get_general'])){
    $query = "SELECT * FROM `general_settings` WHERE `sr_no` = ?";
    $values = [1];
    $result = select($query, $values , "i");
    $row = mysqli_fetch_assoc($result);
    $json_data =  json_encode($row);
    echo $json_data;
}

if(isset($_POST['update_general'])){
    $frm_data = filteration($_POST);
    $query = "UPDATE `general_settings` SET `site_title` = ?, `site_about` = ? WHERE `sr_no` = ?";
    $values = [$frm_data['site_title'], $frm_data['site_about'], 1];
    $result = update($query, $values, "ssi");
    echo $result;
}

?>
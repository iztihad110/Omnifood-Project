<?php
session_start();
include("../db_connection_class.php");
$obj = new DB_Connection_Class();
$con = $obj->connection();
//print_r($_POST);
$all_message_of_db_saving = [];
include_once("server_side_validation.php");

date_default_timezone_set('Asia/Dhaka');
$recording_time = date("Y-m-d H:i:s");

mysqli_query($con,"BEGIN");
mysqli_query($con,"START TRANSACTION") or die(mysqli_error($con));

$full_name = trim(mysqli_real_escape_string($con, $_POST['full_name']));
$email = trim(mysqli_real_escape_string($con, $_POST['email']));
$select_where = trim(mysqli_real_escape_string($con, $_POST['select-where']));;

$select_sql = "SELECT * FROM `omni_food`
							WHERE
						    `email`='$email'
                            ";


$duplicate_data = mysqli_query($con, $select_sql) or die(mysqli_error($con));

if(mysqli_num_rows($duplicate_data)>0)
{
    mysqli_query($con, "ROLLBACK");
    $all_message_of_db_saving['database_message'] = "<font color = 'red'>Data was already Saved</font>";
    $all_message_of_db_saving['db_message_type'] = "Warning!!";
    echo json_encode($all_message_of_db_saving);
    $obj->disconnection();
    exit();
}

$insert_sql = "INSERT INTO `omni_food`
						(
						`full_name`
						,`email`
						,`select_where`
						)
						VALUES
						(
						'$full_name'
						,'$email'
						,'$select_where'
						)";
$insert_data = mysqli_query($con, $insert_sql) or die(mysqli_error($con));

if(mysqli_affected_rows($con) != 1)
{
    mysqli_query($con, "ROLLBACK");
    $all_message_of_db_saving['database_message'] = "<font color = 'red'>Data cannot be saved</font>";
    $all_message_of_db_saving['db_message_type'] = "Warning!!";
    echo json_encode($all_message_of_db_saving);
    $obj->disconnection();
    exit();
}

mysqli_query($con, "COMMIT");
$all_message_of_db_saving['database_message'] = "<font color = 'green'>Data was Successfully Saved</font>";
echo json_encode($all_message_of_db_saving);

?>
<?php
$id_of_currently_validated_element;

if($_POST['full_name'] == "" || !isset($_POST['full_name']))
{
    $id_of_currently_validated_element = 'full_name';
    $all_message_of_db_saving['database_message'] = "<font color = 'red'>Please Enter Your Full Name</font>";
    $all_message_of_db_saving['db_message_type'] = "Warning!!!";
    echo json_encode($all_message_of_db_saving);
    $obj->disconnection();
    exit();
}

else if($_POST['email'] == "" || !isset($_POST['email']))
{
    $id_of_currently_validated_element = 'email';
    $all_message_of_db_saving['database_message'] = "<font color = 'red'>Please Enter Your Email</font>";
    $all_message_of_db_saving['db_message_type'] = "Warning!!!";
    echo json_encode($all_message_of_db_saving);
    $obj->disconnection();
    exit();
}

if($_POST['select-where'] == "" || !isset($_POST['select-where']))
{
    $id_of_currently_validated_element = 'select_where';
    $all_message_of_db_saving['database_message'] = "<font color = 'red'>Please Select Where Came to Know About Us</font>";
    $all_message_of_db_saving['db_message_type'] = "Warning!!!";
    echo json_encode($all_message_of_db_saving);
    $obj->disconnection();
    exit();
}
?>
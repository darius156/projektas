<?php

include "dbConn.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"delete from tbltest where id = '$id'");
$del = mysqli_query($db,"delete from userinfo where id = '$id'");
$del = mysqli_query($db,"delete from add_worker where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:admin.php"); // redirects to admin
    exit;	
}
else
{
    echo "Nepavyko istrinti"; // display error message if not delete
}
?>
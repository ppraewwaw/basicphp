<?php

require "config/connect_mysql.php";

$id = $_GET['id'];
$sql = "DELETE FROM members WHERE id='$id'";
$query = mysqli_query($connect, $sql);
if ($query) {

    echo  "<div class='alert alert-success'>Success</div>";
} else {
    echo  "<div class='alert alert-danger'>Fail!!</div>";
}

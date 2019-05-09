<?php
require "config/connect_mysql.php";

$sql = "SELECT * FROM members";
$query = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Members</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>

<body>
    <div class="jumbotron bg-dark text-light ">
        <h1 class="display-4 text-center">Members</h1>
    </div>
    <div class="container-fluid">
        <?php
        echo "<table class='table table-dark table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Fullname</th>";
        echo "<th>Tel.</th>";
        echo "<th>email</th>";
        echo "<th>password</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        //นับจำนวนแถวที่พบในตาราง
        $row = mysqli_num_rows($query);
        echo "<h3 class='mb-4'> พบข้อมูล ", $row, " รายการ</h3>";
        //loop ข้อมูลใน database มาแสดง
        while ($data = mysqli_fetch_assoc($query)) //เอาไว้แยก array มันจะอ่านวนไปจนข้อมูลหมด
        {
            echo "<tr>";
            echo "<td>", $data["id"], "</td>";
            echo "<td>", $data["fullname"], "</td>";
            echo "<td>", $data["tel"], "</td>";
            echo "<td>", $data["email"], "</td>";
            echo "<td>", $data["password"], "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>
    </div>

    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
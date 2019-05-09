<?php
require "config/connect_mysql.php";
//รับค่าไอดีที่จะแก้ไข
$id = $_GET['id'];
$msg = "";
//ตรวจสอบการ Submit form
if (!empty($_POST["submit"])) {
    //รับค่าจาก form ด้วย php
    $fullname  = $_POST["fullname"];
    $email    = $_POST["email"];
    $password = $_POST["password"];
    $tel = $_POST["tel"];
    $status = $_POST["status"];

    $sql = "UPDATE members 
    SET fullname='$fullname',
    email='$email',
    password = '$password',
    status='$status',
    tel='085461341' 
    where id = '$id'";
    $query = mysqli_query($connect, $sql);

    if ($query) {

        $msg = "<div class='alert alert-success'>Success</div>";
        echo "<meta http-equiv=\"refresh\" content=\"1;URL='CRUD.php'\">";
    } else {
        $msg = "<div class='alert alert-danger'>Fail!!</div>";
    }
}
//ดึงข้อมูลเมมเบอร์
$sql_sel = "SELECT * FROM members WHERE id=$id";
$query_sel = mysqli_query($connect, $sql_sel);
$data = mysqli_fetch_assoc($query_sel);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Member</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>

    <div class="jumbotron bg-dark text-light ">
        <h1 class="display-4 text-center">Edit Member</h1>
    </div>
    <div class="container">

        <?php echo $msg; ?>
        <form method="POST" action="update_member.php?id=<?php echo $_GET['id'] ?>">

            <div class="form-group row">
                <label for="fullname" class="col-sm-3 col-form-label">fullname</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="" required value="<?php echo $data["fullname"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3 col-form-label">email</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="email" id="email" placeholder="" required value="<?php echo $data["email"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">password</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="password" id="password" placeholder="" value="<?php echo $data["password"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tel" class="col-sm-3 col-form-label">tel</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="tel" id="tel" placeholder="" required value="<?php echo $data["tel"]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-3 col-form-label">status</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="status" id="status" placeholder="" required value="<?php echo $data["status"]; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <input type="submit" name="submit" value="Create" class="btn btn-primary">
                    <hr>
                </div>
            </div>


        </form>
    </div>

    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
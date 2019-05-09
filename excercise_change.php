<?php
//check submit
$change = 0;
if (!empty($_POST["submit"]))
{
//รับค่าจาก form ด้วย php
    $price  = $_POST["goods"];
    $pay    = $_POST["money"];
    $change = $pay - $price;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXCHANGE</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="jumbotron bg-secondary text-light">
        <h1 class="display-2 text-center">EXCHANGE</h1>
    </div>
    <div class="container">
        <form class="col-md-6 offset-md-3" method="POST" action="excercise_change.php">
            <div class="form-group row">
                <label for="goods" class="col-sm-3 col-form-label">PRICE</label>
                <div class="col-sm-9">
                    <input type="number" step=".01" class="form-control" name="goods" id="goods" placeholder=""required>
                </div>
            </div>
            <div class="form-group row">
                <label for="money" class="col-sm-3 col-form-label">PAY</label>
                <div class="col-sm-9">
                    <input type="number" step=".01"  class="form-control" name="money" id="money" placeholder=""required>
                </div>
            </div>
            <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label"></label>
                <div class="col-sm-9">
                    <input type="submit" name="submit" value="Calculate"class="btn btn-primary">
                    <hr>
Change
<?php
echo $change
?>
 Baht
                </div>
            </div>
        </form>

    </div>


    <script src="jquery/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculation"  method="POST">
    <label for=""> value one</label> <br>    
    <input type="text" name="val1"> <br>
    <label for=""> value two</label> <br>
    <input type="text" name="val2"><br>
    <input type="submit" name="sub">

    </form>
    <input type="text" value="<?php echo $res?>">
</body>
<?php
if(isset($_POST['sub'])){
$val1=$_POST['val1'];
$val2=$_POST['val2'];
$res=$val+$val2;

}
 ?>
</html>
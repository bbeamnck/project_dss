<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <title>รายละเอียดสินค้า</title>
</head>
<?php 
 if(isset($_GET["id"])){
   $id= $_GET["id"];
 }
 else{
     ?><script>
         window.location.replace('form.php')
     </script><?php
 }
?>

<body style="background-image:url('http://tonkit360.com/wp-content/uploads/2018/12/1514968024.jpg');  
  background-repeat: no-repeat;
  background-size: cover; background-attachment: fixed;">
    <?php
   include('navbar.php')
   ?>
    <div class="container">
        <br>
                        <?php
                        
                $con = mysqli_connect('localhost','root','12345678','dss');
                $sql = "select * from store where id='$id'";
                $obj = mysqli_query($con,$sql);
                $r;
                while($r = mysqli_fetch_array($obj)){
                    ?>
                    <div class="row">
                    <div class="card" style="background-color:rgba(255, 255, 255, 0.95); width:100%; height:500px;margin:5px 5px 5px 5px;">
                        <div class="card-body">
                            <table style="font-size:25px;" >
                                <tr><td rowspan="5"><img src="Pic/<?php echo $r[7]; ?>" width="450" height="450"></td><td style="padding-right:20px;"></td><td width="120px" align=right>ชื่อสินค้า : </td><td>&emsp;<?php echo $r[6]; ?></td></tr>
                                <tr><td></td></tr>
                                <tr><td></td><td align=right>ราคา : </td><td>&emsp;<?php echo $r[1]; ?></td></tr>
                                <tr><td></td><td align=right>กรัม : </td><td>&emsp;<?php echo $r[2]; ?></td></tr>
                                <tr><td></td><td align=right>แคลลอรี่ :</td><td>&emsp;<?php echo $r[3]; ?></td></tr>
                            </table>
                          
                        </div>
                    </div>
                </div>
                    <?php          
                }
                ?>
             
        </div>
</body>

</html>
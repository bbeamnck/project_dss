<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="css/beamstyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <title>ผลลัพธ์การจัดอันดับ</title>
</head>
<?php 
 if(isset($_POST["price"])){
    $arrayinput[0][0] = $_POST["price"]; //Price
    $arrayinput[0][1] = $_POST["Worth"]; //Worth
    $arrayinput[0][2] = $_POST["Full"];   //Full
 }
 else{
     ?><script>
         window.location.replace('form.php')
     </script><?php
 }
function cmp($a, $b)
{
    if ($a[7] == $b[7]) {
        return 0;
    }
    return ($a[7] < $b[7]) ? -1 : 1;
}

?>

<body>
    <?php
   include('navbar.php')
   ?>
    <div class="container">

        <div class="card text-white" style="background-color:rgba(0, 0, 0, 0.8);margin:15px 15px;">
    
        <center><h2>จัดอันดับรายการสินค้าที่มี ราคา <?php echo $arrayinput[0][0]; ?> บาท <br>มีความคุ้มค่า(แคลลอรี่)ระดับ <?php echo $arrayinput[0][1]; ?> และมีความอิ่มท้อง(กรัม)ระดับ <?php echo $arrayinput[0][2]; ?></h2></center>
        </div>
       
                        <?php
                $con = mysqli_connect('localhost','root','12345678','dss');
                $sql = "select * from store";
                $obj = mysqli_query($con,$sql);
                $array1;
                $Count = 0;
                while($r = mysqli_fetch_array($obj)){
                    $array1[$Count][0] = $r[0]; //id
                    $array1[$Count][1] = $r[1]; //price
                    $array1[$Count][2] = $r[2]; //gram
                    $array1[$Count][3] = $r[3]; //Kcal
                    $array1[$Count][4] = $r[4]; //Worth
                    $array1[$Count][5] = $r[5]; //Full
                    $array1[$Count][6] = $r[6]; //Name
                    $array1[$Count][7] = 0;   //Manhattan Distance
                    $array1[$Count][8] = $r[7];   //Picture
                    $Count++;             
                }
                $array2 = $array1;
                //Input By Form ใส่ค่า ราคา ความคุ้มค่า  ความอิ่ม            
                ?>  
                        <?php
                //Start Manhattan Distance
                $n = count($array1);
                $sum = 0;
                for ($i = 0; $i < $n; $i++) {
                    $array1[$i][7] = abs($array1[$i][1]-$arrayinput[0][0])+abs($array1[$i][4]-$arrayinput[0][1])+abs($array1[$i][5]-$arrayinput[0][2]); //Manhattan Distance แต่ละ Record
                    //$Eucli =  sqrt(pow(($array1[$i][1]-$arrayinput[0][0]),2)+pow(($array1[$i][4]-$arrayinput[0][1]),2)+pow(($array1[$i][5]-$arrayinput[0][2]),2));        
                    //echo 'Distance Manhattan of ID '.$array1[$i][0].' is '.$array1[$i][7].'<br>';
                    //echo 'Distance Euclidien of ID '.$array1[$i][0].' is '.$Eucli.'<br>';
                }
                //End Manhattan Distance
                
                //Start Sort by Distance
                usort($array1,"cmp");              
                //End Sort by Distance
                ?>
        <div class="row">
            <div class="col-md-4">
                <div style="background-color:black; width:100%; height:600px;margin-top:5px;">
                <div class="card" style="background-color:#a7c9b5 !important;">
            <div class="card-header">
                สินค้าอื่นๆ <span style="float:right"><a href="showAllProduct.php">ดูทั้งหมด</a></span>
            </div>
            <div class="card-body" >
            <table >
                <?php
                 for ($i = 0; $i < 20 ; $i++) {
                     if($array2[$i][0] == null)break;
                    echo '<tr><td><a href="showProduct.php?id='.$array2[$i][0].'"/>'.$array2[$i][6].'</td><td><img src="Pic/'.$array2[$i][8].'" width="50" height="50"></td></tr>';
                }
                ?>
                </table>
            </div>
            </div>
                </div>
            </div>
            <div class="col-md-8">

                <?php
                    for ($i = 0; $i < 10 ; $i++) {
                        ?>
                <div class="row">
                    <div class="card" style="background-color:rgba(179, 185, 209, 0.8); width:100%; height:300px;margin:5px 5px 5px 5px;">
                        <div class="card-body">
                            <table >
                                <tr><td rowspan="5"><img src="Pic/<?php echo $array1[$i][8]; ?>" width="250" height="250"></td><td style="padding-right:20px;"></td><td width="120px" class="boldei" align=right>อันดับที่ :</td><td class="boldei">&emsp;<?php echo ($i+1);?></td></tr>
                                <tr><td></td><td align=right>ชื่อสินค้า : </td><td>&emsp;<a href='showProduct.php?id=<?php echo $array1[$i][0]; ?>'><?php echo $array1[$i][6]; ?></td></tr>
                                <tr><td></td><td align=right>ราคา : </td><td>&emsp;<?php echo $array1[$i][1]; ?></td></tr>
                                <tr><td></td><td align=right>กรัม : </td><td>&emsp;<?php echo $array1[$i][2]; ?></td></tr>
                                <tr><td></td><td align=right>แคลลอรี่ :</td><td>&emsp;<?php echo $array1[$i][3]; ?></td></tr>
                            </table>
                          
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
</body>

</html>
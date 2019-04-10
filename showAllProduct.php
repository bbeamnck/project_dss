<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <link rel="stylesheet" href="css/beamstyle.css">
        
    <title>สินค้า</title>
</head>
<?php 
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
    <div class="container" >
        <br>
        <div class="card" style="background-color:rgba(0, 0, 0, 0.3);">
            <div class="card-header">
                สินค้าทั้งหมด
            </div>
            <div class="card-body">
                
                <table id="example" class="table table-striped table-bordered" style="background-color:#bad1a7" width=100% >
                    <thead>
                       
                        <th>Name</th>
                        <th>price</th>
                        <th>gram</th>
                        <th>Kcal</th>
                        <th>Picture</th>
                    </thead>
                    <tbody >
                        <?php
                $con = mysqli_connect('localhost','root','12345678','dss');
                $sql = "select * from store";
                $obj = mysqli_query($con,$sql);
                $array1;
                $Count = 0;
                while($r = mysqli_fetch_array($obj)){
                    echo '<tr><td><a href="showProduct.php?id='.$r[0].'">'.$r[6].'</td><td>'.$r[1].'</td><td>'.$r[2].'</td><td>'.$r[3].'</td><td><img src="Pic/'.$r[7].'" width="75" height="75"></td></tr>';
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
                $arrayinput[0][0] = 10;
                $arrayinput[0][1] = 4;
                $arrayinput[0][2] = 4;              
                ?>
                 </tbody>
                </table><br>
                
        </div>
        <script>
        $(document).ready(function() {
    $('#example').DataTable();
    } );
        </script>
</body>
</html>
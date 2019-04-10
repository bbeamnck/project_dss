<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>หน้าแรก</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/beamstyle.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <style>
            
            
        </style> 

</head>
<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->

<body>
    <?php
   include('navbar.php')
   ?>
   <!-- <img src="6.jpg"> -->
   <div align=right>
   <div class="card text-white" style="background-color:rgba(0, 0, 0, 0.3);">
                    <div class="card-body" style="float:right;">
                        <a class="card-title" > หากคุณมีเงินอยู่ในมืออย่างจำกัด?<br>
                        คุณจะเลือกสินค้าชนิดไหนที่รับประทานแล้วอิ่มท้อง หรือได้พลังงานสูงสุด<br>
                        เราจึงทำระบบสนับสนุนการตัดสินใจนี้ขึ้นมาเพื่อแก้ไขปัญหาเหล่านี้้<br>

                        </a>
                    </div>
                </div>
                </div>
    <br>
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-white" style="background-color:rgba(0, 0, 0, 0.7);">
                    <div class="card-body">
                        
                        <div class="card-text">
                            <form method="POST" action="DSS_Store.php">
                                <div class="form-group">
                                    <label>ราคา</label>
                                    <input type="number" min="1" name="price" max="100" class="form-control tx20px" id="exampleFormControlInput1" placeholder="เช่น 20" required >
                                </div>
                                <div class="form-group">
                                    <label>ระดับความอิ่มท้อง
                                        <span style="color:red;">***ได้จำนวนกรัมเยอะ</span>
                                    </label>
                                    <select name="Full" class="form-control tx20px" required>
                                        <option value="" disabled selected>ใส่ระดับความอิ่มท้องที่คุณต้องการ</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>ระดับความคุ้มค่า
                                        <span style="color:red;"> &nbsp;&nbsp;***ได้พลังงานเยอะ(แคลลอรี่)</span>
                                    </label>
                                    <select name="Worth" class="form-control tx20px" required>
                                        <option value="" disabled selected>ใส่ระดับที่คุณต้องการ</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="submit" class="btn btn-outline-success btn-lg"><a class="tx30px">ยืนยัน</a></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
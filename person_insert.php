<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');

        * {
            font-family: 'Itim', cursive;
        }
    </style>

    <?php include("headboot.php") ?>

</head>

<body>

    <?php
    include("config/condb.php");
    $ps_id = $_POST["ps_id"];
    $ps_prefix	= $_POST["ps_prefix"];
    $ps_name = $_POST["ps_name"];
    $ps_suname = $_POST["ps_suname"];
    $ps_age = $_POST["ps_age"];
    $ps_major_name = $_POST["ps_major_name"];
    
    print "รหัสบัตรอ้างอิง คือ : " . $ps_id . "<br>";
    echo "ชื่อ : " . $ps_prefix	 . " " . $ps_nps_nameame . " นามสกุล ". " " . $ps_suname;
    echo "อายุ  : " . $ps_age . " "  . "สาขาวิชา". " " . $ps_major_name ;




    $sql = "INSERT INTO students (ps_id, ps_prefix, ps_name, ps_suname, ps_age, ps_major_name) VALUES ('$ps_id', '$ps_prefix', '$ps_name', '$ps_suname', '$ps_age', '$ps_major_name')";
    $result = mysqli_query($conn, $sql) or die("Error in query หรือจัดการข้อมูลไม่ได้ : $sql ");
    mysqli_close($conn);

    //ถ้าสำเร็จให้ขึ้นอะไร
    if ($result) {
    echo "
    <script type='text/javascript'>";
        echo "alert('ทำการบันทึกข้อมูลสำเร็จเรียบร้อยแล้ว');";
        echo "window.location = 'type_books.php' ";
        echo "</script>";
    } else {
    //กำหนดเงื่อนไขว่าถ้าไม่สำเร็จให้ขึ้นข้อความและกลับไปหน้าเพิ่ม
    echo "
    <script type='text/javascript'>";
        echo "alert('error! การบันทึกข้อมูลไม่สำเร็จกรุณาตรวจสอบมีข้อผิดพลาด');";
        echo "window.location = 'index2.php' ";
        echo "</script>";
    }
    ?>


    <?php include("footboot.php") ?>

</body>

</html>
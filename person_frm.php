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


    <div class="container mt-1">
        <h1>
            <div class="text-center"> ลงทะเบียน </div>
        </h1>
        <form action="person_insert.php" method="POST" enctype="multipart/form-data" name="person_frm" id="person_frm">

            <div class="row g-2">

                <div class="col-md-4">
                    <label for="form-label">รหัสนักศึกษา</label>
                    <input type="text" class="form-control" id="ps_id" name="ps_id" placeholder="กรุณาป้อนรหัสนักศึกษา" required>
                </div>
                <pr></pr>

                <div class="col-md-4">
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นาย" checked>นาย
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นางสาว">นางสาว
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="นาง">นาง
                    <input class="form-check-input" type="radio" name="ps_prefix" id="ps_prefix" value="อื่น">อื่น ๆ

                    <input type="text" class="form-control" id="ps_name" name="ps_name" placeholder="กรุณษป้อนชื่อ" required>
                </div>
                <pr></pr>

                <div class="col-md-4">
                    <label for="form-label">นามสกุล</label>
                    <input type="text" class="form-control" id="ps_suname" name="ps_suname" placeholder="กรุณาป้อนนามสกุล" required>
                </div>
                <pr></pr>

                <div class="col-md-4">
                    <label for="form-label">อายุ</label>
                    <input type="text" class="form-control" id="ps_age" name="ps_age" placeholder="กรุณาป้อนอายุ" required>
                </div>
                <pr></pr>

                <!-- <div class="col-md-4">
                    <select class="foem-select form-select-sm" aria-label=".form-select-sm example" name="ps_major_id" id="ps_major_id">
                        <option selected>สาขาวิชา</option>
                        <option value="1340004">สาขาวิชาคอมพิวเตอร์ธุรกิจ</option>
                        <option value="1420002">สาขาวิชาเทคโนโลยีสานสนเทศและดิจิทัล</option>
                        <option value="1420003">สาขาวิชาวิทยาการข้อมูลและอุตสาหกรรมดิจิทัล</option>
                        <option value="1424004">สาขาวิชาเทคโนโลยีสารสนเทศทางการแพทย์</option>
                        <option value="1540003">สาขาวิชาวิศวกรรมคอมพิวเตอร์และระบบอัตโนมัติ</option>
                        <option value="1540005">สาขาวิชาวิศวกรรมคอมพิวเตอร์</option>
                        <option value="1760002">สาขาวิชาคอมพิวเตอร์</option>
                    </select>
                </div><pr></pr> -->

                <div class="col-md-4">
                    <select class="foem-select form-select-sm" aria-label=".form-select-sm example" name="ps_major_name" id="ps_major_name">
                        <option selected>สาขาวิชา</option>
                        <option value="สาขาวิชาคอมพิวเตอร์ธุรกิจ">สาขาวิชาคอมพิวเตอร์ธุรกิจ</option>
                        <option value="สาขาวิชาเทคโนโลยีสานสนเทศและดิจิทัล">สาขาวิชาเทคโนโลยีสานสนเทศและดิจิทัล</option>
                        <option value="สาขาวิชาวิทยาการข้อมูลและอุตสาหกรรมดิจิทัล">สาขาวิชาวิทยาการข้อมูลและอุตสาหกรรมดิจิทัล</option>
                        <option value="สาขาวิชาเทคโนโลยีสารสนเทศทางการแพทย์">สาขาวิชาเทคโนโลยีสารสนเทศทางการแพทย์</option>
                        <option value="สาขาวิชาวิศวกรรมคอมพิวเตอร์และระบบอัตโนมัติ">สาขาวิชาวิศวกรรมคอมพิวเตอร์และระบบอัตโนมัติ</option>
                        <option value="สาขาวิชาวิศวกรรมคอมพิวเตอร์">สาขาวิชาวิศวกรรมคอมพิวเตอร์</option>
                        <option value="สาขาวิชาคอมพิวเตอร์">สาขาวิชาคอมพิวเตอร์</option>
                    </select>
                </div>
                <pr></pr>


                <div class="col-md-4">
                    <input type="submit" class="form-control btn btn-waring" name="btnok" id="btnok" value="ตกลง">
                </div>


                <?php include("footboot.php") ?>

</body>

</html>
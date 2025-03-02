<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงข้อมูลบุคคล</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@700&family=Prompt:wght@100;400;500&display=swap');

        * {
            font-family: 'IBM Plex Sans Thai Looped', sans-serif;
            font-family: 'Prompt', sans-serif;
        }
    </style>
    <?php
    include("headboot.php");
    include("config/condb.php");
    ?>
</head>

<body>

    <table id="example3" class="table table-bordered table-striped dataTable">
        <thead>
            <tr role="row" class="info">
                <!-- <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลำดับ</th> -->
                <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รหัสนักศึกษา</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อ</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">สกุล</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 20%;">สาขาวิชา</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">แก้ไข</th>
                <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ลบ</th>
            </tr>
            <?php
            $sql = "SELECT * FROM students order by ps_id desc";
            // $sql = "SELECT * FROM students_major order by ps_major_name desc";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
            ?>


        <tbody>
            <tr>
                <td><?php print $row['ps_id']; ?> </td>
                <td><?php echo $row['ps_prefix'] . ' ' . $row['ps_name']; ?> </td>
                <td><?php echo $row['ps_suname']; ?></td>
                <td><?php echo $row['ps_major_name']; ?></td>

                <td><a class="btn btn-warning btn-flat btn-sm" href="person_edit.php?act=edit&ps_id=<?php echo $row['ps_id']; ?>">
                            แก้ไข
                        </a> </td>
                    <td> <a class="btn btn-danger btn-flat btn-sm" href="person_del.php?ps_id=<?= $row['ps_id']; ?>" onclick="return confirm('ยืนยันการลบข้อมูล !!');">
                            ลบ
                        </a></td>

            <?php }       
            ?>
            </tr>
        </tbody>

        
            </thead>
    </table>







    <?php include("footboot.php"); ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประเมิน</title>
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
    <div class="container mt-1">
        <h1>
            <div class="text-center"> ประเมินหนังสือ </div>
        </h1>


        <thead>
            <div class="thead-info">
                <?php
                $sql = "SELECT * FROM booktype order by booktype_id desc";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) {

                ?>

        <tbody>
            <div class="text-center">
                <div class="tbody-info">
                    <tr>
                        <td>
                            <div class="text-center"> รหัสหนังสือ <?php print $row['booktype_id'] . "<br>"; ?></div>
                        </td>
                        <td>
                            <div class="text-center"> ชื่อหนังสือ <?php echo $row['title'] . "<br>"; ?></div>
                        </td>
                        <td>
                            <div class="text-center"> ชื่อผู้แต่ง <?php echo $row['author'] . "<br>"; ?></div>
                        </td>
                        <td>
                            <div class="text-center"> สถานที่พิมพ์ <?php echo $row['published'] . "<br>"; ?></div>
                        </td>
                        <td>
                            <div class="text-center"> เรื่องย่อ <?php echo $row['keyword'] . "<br>"; ?></div>
                        </td>

                        <!-- <div class="col-md-4"> -->
                        <div class="text-center">
                            <input class="form-check-input" type="radio" name="ratings" id="ratings" value="1" checked>1
                            <input class="form-check-input" type="radio" name="ratings" id="ratings" value="2">2
                            <input class="form-check-input" type="radio" name="ratings" id="ratings" value="3">3
                            <input class="form-check-input" type="radio" name="ratings" id="ratings" value="4">4
                            <input class="form-check-input" type="radio" name="ratings" id="ratings" value="5">5
                        </div>

                        <div class="text-center">
                            <input type="submit" class="form-control btn btn-waring" name="btnok" id="btnok" value="ตกลง">
                        </div>

                </div>
            </div>
            <pr></pr>



        <?php } ?>
        </tr>
        </tbody>
        </thead>


        <style type="text/css">
            body {
                text-align: center;
                background: url(https://img.freepik.com/free-vector/hand-drawn-world-book-day-background_23-2149334623.jpg?w=1060&t=st=1693246658~exp=1693247258~hmac=36228ea63b64f90d3d7666def04fe558d65e114b7b53aa9f440d48e425ed5186);
            }

            .tbody {
                text-align: center;
                height: 500px;
                display: flex;
                justify-content: center;
                align-items: center;
                /* border: 1px solid red; */

            }

            .tbody-info {
                text-align: center;
                width: 500px;
                height: 200px;
                border: 1px solid black;
                background: #81d4fa;
            }
        </style>

        <?php include("footboot.php"); ?>
</body>

</html>
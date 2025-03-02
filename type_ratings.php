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

<?php
            $sql = "SELECT * FROM ratings order by booktype_id desc";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) 

            ?>
<?php
    include("config/condb.php");
    $booktype_id = $_POST["booktype_id"];
    $ps_id = $_POST["ps_id"];
    $ratings = $_POST["ratings"];

    print "รหัสหนังสือ : " . $booktype_id . "<br>";
    echo "รหัสนักศึกษา : " . $ps_id . "<br>";
    echo "คะแนน  : " . $ratings . "<br>";
    


    ?>
<?php include("footboot.php"); ?>
</body>

</html>
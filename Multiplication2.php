<?php
    $Multi = @$_POST['multi'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>การคำนวณสูตรคูณ</title>
    </head>
    <body>
    <h2>การคำนวณสูตรคูณ</h2>
    <form action="Multiplication2.php" method="POST">
    Multi : <input type="text" name="multi"><br><br>
    <input type="submit" value="คำนวณ"><br><br>
    </form>
    <?php
        $i=1;
        while ($i<=12)
        {
            echo "$i x $Multi=".$i*$Multi."<br>";
            $i++;
        }
    ?>


    </body>
</html>

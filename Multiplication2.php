<?php
    $Multiply = @$_POST['multiply'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>การคำนวณสูตรคูณ</title>
    </head>
    <body>
    <h2>การคำนวณสูตรคูณ</h2>
    <form action="Multiplication2.php" method="POST">
    Multiply : <input type="text" name="multiply"><br><br>
    <input type="submit" value="คำนวณ"><br><br>
    </form>
    <?php
        $i=1;
        while ($i<=12)
        {
            echo "$i x $Multiply=".$i*$Multiply."<br>";
            $i++;
        }
    ?>


    </body>
</html>

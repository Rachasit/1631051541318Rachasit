<?php
    $grade = @$_POST['grade'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>การคำนวณเกรด</title>
    </head>
    <body>
    <h2>การคำนวณเกรด</h2>
    <form action="grade2.php" method="POST">
    Grade : <input type="text" name="grade"><br><br>
    <input type="submit" value="คิดเกรด"><br><br>
    </form>
    <?php
    echo "คุณได้เกรด <tr>";
    if ($grade >= 80 and $grade <=100){
    echo "A";}
    elseif ($grade >= 75 and $grade <=79){
        echo "B+";}
        elseif ($grade >= 70 and $grade <=74){
            echo "B";}
            elseif ($grade >= 65 and $grade <=69){
                echo "C+";}
                elseif ($grade >= 60 and $grade <=64){
                    echo "C";}
                    elseif ($grade >= 55 and $grade <=59){
                        echo "D+";}
                        elseif ($grade >= 50 and $grade <=54){
                            echo "D";}
                            elseif ($grade >= 1 and $grade <=49){
                                echo "F";}
                            
    else{
        echo "ไม่มีข้อมูล";
    }
    ?>


    </body>
</html>
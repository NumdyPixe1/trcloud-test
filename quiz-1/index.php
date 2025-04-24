<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz-1</title>
</head>
<body>

<form action="index.php" method="post">
  <label>Number of Star:</label>
  <input type="number" name="num">
  <input type="submit" name="cal" value="Go">
</form>
</br>
</br>

<?php
    $num = $_POST['num'];
    if(isset($_POST['cal'])){
        if($num % 2 == 0){
            //คู่
            for($row = 0; $row < $num; $row++){
                echo "*";
                for($col = 0; $col < $row; $col++){
                    echo "*";
                }
                echo "<br/>";
            }   
        } else{
            //คี่
            for($row = $num; $row >= 1; $row--){
                for($col = $row; $col > 0; $col--){
                    echo "*";
                }
                echo "<br/>";
        }
          
    }
 }  
    ?>
</body>
</html>
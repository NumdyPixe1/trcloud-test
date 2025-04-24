<?php
    $result = null;
  $value = $_POST['v1'];
  if(isset($_POST['cal'])){
    
       
        $result = calculate($value);
       // echo"<h1>$result</h1>";
    }
    function calculate($value){
        $percents = array(100, 7, 107, 3, 104 );
        foreach ($percents as $percent) {
           
        }
     return  $value * 100;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz-2</title>
</head>
<body>
<form action="index.php" method="post">
    <p>ผู้ใช้กรอกได้ 1 ช่อง</p>
    <table border="1">
    <tbody>
    <tr>
        <th>100</th>
        <th>7</th>
        <th>107</th>
        <th>3</th>
        <th>104</th>
    </tr>
    <tr>
        <!-- 100 -->
        <td><input type="text" name="v1" value=<?php echo"$result"?> ></td>
         <!-- 7 -->
        <td><input type="text" name="v2" ></td>
         <!-- 107 -->
        <td><input type="text" name="v3" value=<?php echo"3"?>></td>
         <!-- 3 -->
        <td><input type="text" name="v4" value=<?php echo"4"?>></td>
         <!-- 104 -->
        <td><input type="text" name="v5" value=<?php echo"5"?>></td>
    </tr>
    </tbody>
    </table>
    
    <input type="submit" name="cal" value="Go">
    <a href="" type="reset">Clear</a>
    
    </form>
    <br/>
</body>
</html>


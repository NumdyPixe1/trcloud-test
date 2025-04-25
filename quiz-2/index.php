<?php
$v100 = null;
$v7 = null;
$v107 = null;
$v3 = null;
$v104 = null;
  if(isset($_POST['cal'])){
    $v100 = $_POST['v100'];
    $v7 = $_POST['v7'];
    $v107 = $_POST['v107'];
    $v3 = $_POST['v3'];
    $v104 = $_POST['v104'];
    if(empty($v100) && empty($v7)&& empty($v107)&& empty($v3) &&empty($v104)){
     $v100= 0;$v7=0; $v107=0; $v3=0; $v104 = 0;
    }else{
        $percents = array( 7/100 , 107/100 , 3/100 , 104/100 ) ;
        // $values = array($v100, $v7, $v107, $v3, $v104);
  
    if($v100){
        $v7 = (float)$v100* $percents[0];//7
        $v107 = (float)$v100* $percents[1];//107
       $v3 = (float)$v100* $percents[2];//3
       $v104 = (float)$v100* $percents[3];//104
    } else if($v7){         
        $v100 = (float)$v7 / $percents[0];// n / 7
        $v107 = (float)$v100 * $percents[1];//107
        $v3 = (float)$v100 * $percents[2];//3
        $v104 = (float)$v100 * $percents[3];//104
    } else if($v107){
        $v100 = (float)$v107 / $percents[1];// n / 107
        $v7 = (float)$v100* $percents[0];//7
        $v3 = (float)$v100 * $percents[2];//3
        $v104 = (float)$v100* $percents[3];//104
    }else if($v3){
        $v100 = (float)$v3 / $percents[2];// n / 3
        $v7 = (float)$v100* $percents[0];//7
        $v107 = (float)$v100 * $percents[1];//107
        $v104 = (float)$v100* $percents[3];//104
    }else if($v104){
        $v100 = (float)$v104 / $percents[3];// n / 104
        $v7 = (float)$v100* $percents[0];//7
        $v107 = (float)$v100 * $percents[1];//107
        $v3 = (float)$v100* $percents[2];//3
    }

    }
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
    <!-- value=<?php echo"$result"?> -->
        <!-- 100 -->
        <td><input type="text" name="v100" value=<?php echo"$v100"?> ></td>
         <!-- 7 -->
        <td><input type="text" name="v7" value=<?php echo"$v7"?> ></td>
         <!-- 107 -->
        <td><input type="text" name="v107"value=<?php echo"$v107"?> ></td>
         <!-- 3 -->
        <td><input type="text" name="v3" value=<?php echo"$v3"?> ></td>
         <!-- 104 -->
        <td><input type="text" name="v104" value=<?php echo"$v104"?> ></td>
    </tr>
    </tbody>
    </table>
    
    <input type="submit" name="cal" value="Go">
    <a href="" type="reset">Clear</a>
    
    </form>
    <br/>
</body>
</html>


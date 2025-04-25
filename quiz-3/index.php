<?php
 $arr1 = array(array("Code"=> 101,"Name" => "AAA"),
 array("Code"=> 102,"Name" => "BBB"),
 array("Code"=> 103,"Name" => "CCC"));
 $arr2 = array(array("Code"=> 103,"City" => "Singapore"),
 array("Code"=> 102,"City" => "Tokyo"),
 array("Code"=> 101,"City" => "Bangkok"));


//  $col1= array_column($arr1,'Code','Name');
//  print_r($col1);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz-3</title>
</head>
<body>
    <b>Array 1</b>
    <table border="1">
    <thead>
            <tr>
                <th>Code</th>
                <th>Name</th> 
            </tr>
        </thead>
        <tbody>
            <?php
            for($i = 0; $i < count($arr1); $i++){

            echo '<tr>'.
            '<td>'.$arr1[$i]["Code"].'</td>'.
            '<td>'.$arr1[$i]["Name"].'</td>';
            '</tr>';   
        }
            ?>
        <!-- <tr>
            <td><?php echo $arr1[0]["Code"];?></td>
            <td><?php echo $arr1[0]["Name"];?></td>
        </tr>
        <tr>
            <td><?php echo $arr1[1]["Code"];?></td>
            <td><?php echo $arr1[1]["Name"];?></td>
        </tr>
        <tr>
            <td><?php echo $arr1[2]["Code"];?></td>
            <td><?php echo $arr1[2]["Name"];?></td>
        </tr> -->
    </tbody>
</table>

<br>
<b>Array 2</b>
    <table border="1">
     <thead>
            <tr>
                <th>Code</th>
            <th>Name</th> 
            </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $arr2[0]["Code"];?></td>
            <td><?php echo $arr2[0]["City"];?></td>
        </tr>
        <tr>
            <td><?php echo $arr2[1]["Code"];?></td>
            <td><?php echo $arr2[1]["City"];?></td>
        </tr>
        <tr>
            <td><?php echo $arr2[2]["Code"];?></td>
            <td><?php echo $arr2[2]["City"];?></td>
        </tr>
    </tbody>
</table>
<br>
<hr>
<b>Output</b>
    <table border="1">
    <thead>
            <tr>
                <th>Code</th>
                <th>Name</th> 
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <td>101</td>
            <td>AAA</td>
            <td>CCC</td>

        </tr>
        <tr>
            <td>102</td>
            <td>BBB</td>
            <td>CCC</td>

        </tr>
        <tr>
            <td>103</td>
            <td>CCC</td>
            <td>CCC</td>

        </tr>
    </tbody>
</table>
</body>
</html>
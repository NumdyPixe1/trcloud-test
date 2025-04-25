<?php
 $arr1 = array(array("Code"=> 101,"Name" => "AAA"),
 array("Code"=> 102,"Name" => "BBB"),
 array("Code"=> 103,"Name" => "CCC"));
 $arr2 = array(array("Code"=> 103,"City" => "Singapore"),
 array("Code"=> 102,"City" => "Tokyo"),
 array("Code"=> 101,"City" => "Bangkok"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz-3</title>
</head>
<body>
    <b>Array1</b>
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
    </tbody>
</table>

<br>
<b>Array2</b>
    <table border="1">
     <thead>
            <tr>
                <th>Code</th>
            <th>City</th> 
            </tr>
        </thead>
        <tbody>
        <?php
            for($i = 0; $i < count($arr2); $i++){
            echo '<tr>'.
            '<td>'.$arr2[$i]["Code"].'</td>'.
            '<td>'.$arr2[$i]["City"].'</td>';
            '</tr>';   
        }
            ?>
    </tbody>
</table>
<br>
<hr>
<br>
<b>Output</b>
    <table border="1">
    <thead>
            <tr>
                <th>Code</th>
                <th>Name</th> 
                <th>City</th>
            </tr>
        </thead>
        <tbody>
        <?php
            for($i = 0; $i < count($arr1); $i++){
            echo '<tr>'.
             '<td>'.$arr1[$i]["Code"].'</td>'.
            '<td>'.$arr1[$i]["Name"].'</td>'.
            '<td>'.$arr2[$i]["City"].'</td>';
            '</tr>';   
        }
            ?>
    </tbody>
</table>
</body>
</html>
<?php

$result='';
if(isset($_POST['btn'])) {
    echo '<pre>';
    print_r($_POST);

    $starting_number = $_POST['starting_number'];
    $ending_number = $_POST['ending_number'];
    $choice = $_POST['choice'];
  

    if($starting_number <= $ending_number){
        if($choice == 'odd'){
            for($i=$starting_number; $i <= $ending_number; $i++){
                if($i % 2 != 0){
                    $result.= $i.' ';
                }
            }
        } else {
            for($i=$starting_number; $i <= $ending_number; $i++){
                if($i % 2 == 0){
                    $result.= $i.' ';
                }
        }
    }
} else {
    for ($i = $starting_number; $i >= $ending_number; $i--) { 
        if ($choice == 'odd') {
           if ($i % 2 != 0) {
            $result.=$i.' ';
           } 
           
        } else {
            if ($i % 2 == 0) {
            $result.=$i.' ';
           }
        
    }
}

}

}

?>


<form action="" method="post">
<table>
    <tr>
        <td>Starting Number</td>
        <td><input type="number" name='starting_number'></td>
    </tr>
    <tr>
        <td>Ending Number</td>
        <td><input type="number" name='ending_number'></td>
    </tr>
    <tr>
        <td>Your Choice</td>
        <td><input type="radio" name='choice' value='odd'>Odd</td>
        <td><input type="radio" name='choice' value='even'>Even</td>
    </tr>
    <tr>
        <td>Result</td>
        <td><textarea name="" id="" cols="40" rows="8"><?php echo $result; ?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name='btn'></td>
    </tr>

</table>
</form>
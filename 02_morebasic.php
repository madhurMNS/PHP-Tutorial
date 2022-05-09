<?php
    $var1 = 1;
    $var2 = 1;

    if($var1 > $var2) {
        echo $var1, " is greater than ", $var2;
    } else if($var1 == $var2){
        echo $var1, " is equal ", $var2;
    }else{
        echo $var2, " is greater than ", $var1;
    }

?>

<?php
    echo "<br>";
    $numArr = array(1,2,3,4,5,6);
    echo count($numArr);

    echo "<br>";
    for($i = 0; $i < count($numArr); $i++){
        echo "The value of i is : ", $numArr[$i], "<br>";
    }

    //for each loop
    echo "<br>";

    foreach ($numArr as $i){
        echo "the value is : ", $i, "<br>";
    }
?>

<?php
    echo '<br>';
    function sum($var1, $var2){
        return $var1+$var2;
    }
    echo sum(10,10);

    echo '<br>';
    function print_method(){
        echo 'normal method';
    }
    echo print_method();


    echo '<br>';
    function is_greater($var1, $var2){
        if($var1 > $var2){
            return "$var1 is greater than $var2";
        }else if($var1 == $var2){
            return "$var1 is equal to $var2";
        }else{
            return "$var2 is greater than $var1";
        }
    }
    echo is_greater(10,20);

    echo '<br>';
    function bool_method($var1){
        if ($var1 > 18){
            return "true";
        }else{
            return "false";
        }
    }

    echo bool_method(1020);
?>
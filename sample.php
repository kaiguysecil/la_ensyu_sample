<?php
    echo "Hello";

    function printArrayEach(array $arr) {
        foreach ($arr as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }

    $arr4 = [4, 5, 6];
    printArrayEach($arr4);

    function printArray(array $arr) {
      for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i] . " ";
      }
      echo "<br>";
    }

    $arr = [1, 2, 3];
    printArray($arr);

    function printArrayEach2(array $arr) {
        foreach ($arr as $value) {
            echo $value . " ";
        }
        echo "<br>";
    }

    $arr3 = [4, 5, 6];
    printArrayEach2($arr3);
?>

<?php
    $a=array(array(66,22),array(11,33));
    $b=array(array(55,33),array(44,33));

    echo "Matrix Addition <br>";

    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $a[$i][$j]+$b[$i][$j]." ";
        }
        echo "<br>";
    }
?>

<?php

//Enables Error Reporting
    error_reporting(E_ALL);
    ini_set("display_errors", 1);


//Loop to run through printing (and calculating) the values.
    echo "<table>";
    for ($i = 1; $i < 101; $i++)
    {
        echo "<tr>";
        for ($j = 1; $j < 101; $j++)
        {
	    $k = $i * $j;
            echo "<td>$k</td>";
        }
        echo "</tr>";        
    }
    echo "</table>";
?>
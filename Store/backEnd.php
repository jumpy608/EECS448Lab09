<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

//Import the CSS stylings
echo "<style>";
echo "#welcome{text-align: center; font-size: 16pt; font: Georgia;}";
echo "table{padding-top: 30px; margin-left: auto; margin-right: auto; text-align: center; font-size: 16pt;}";
echo "th{background-color: lightgreen; text-align: center}";
echo "td{background-color: lightblue;}";
echo "</style>";

//Create the variables used in the HTML 'form'.
$userid = $_POST["userID"];
$password = $_POST["password"];
$hearts = $_POST["hearts"];
$clubs = $_POST["clubs"];
$diamonds = $_POST["diamonds"];
$spades = $_POST["spades"];
$shipping = $_POST["shipping"];


//Main PHP loop
echo "<div id='welcome'>";
    echo "<h2><b>Welcome back $userID!</b></h2>";
    echo "Your password is $password";
echo "</div>";
    echo "<table>";
        echo "<tr>";
            echo "<th></th>";
            echo "<th>Quantity</th>";
            echo "<th>Cost Per Item</th>";
            echo "<th>Sub Total</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>Ace of Hearts</th>";
            echo "<td>$hearts</td>";
            echo "<td>$1</td>";
            $cost1 = 1*$hearts;
            echo "<td>$$cost1</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>Ace of Clubs</th>";
            echo "<td>$clubs</td>";
            echo "<td>$1</td>";
            $cost2 = 1*$clubs;
            echo "<td>$$cost2</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>Ace of Diamonds</th>";
            echo "<td>$diamonds</td>";
            echo "<td>$1</td>";
            $cost3 = 1*$diamonds;
            echo "<td>$$cost3</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>Ace of Spades</th>";
            echo "<td>$spades</td>";
            echo "<td>$1</td>";
            $cost4 = 2*$spades;
            echo "<td>$$cost4</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<th>Shipping</th>";
            echo "<td colspan='2'>$shipping</td>";
            if ($shipping == "Free 7 Day")
            {
                $cost5 = 0;
            }
            else if ($shipping == "$50 Over Night")
            {
                $cost5 = 50;
            }
            else if ($shipping == "$5 Three Day")
            {
                $cost5 = 5;
            }
            echo "<td>$$cost5</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<th colspan='4'>Total Shopping Cart Cost</th>";
            $totalcost = $cost1 + $cost2 + $cost3 + $cost4 + $cost5
            echo "<th>$$totalcost</th>";
        echo "</tr>";
    echo "</table>";
echo "</div>";

?>
<?php

    	//Display Error Reporting
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
	
        //Set question responses to POST
	    $q1 = $_POST["question1"];
    	$q2 = $_POST["question2"];
    	$q3 = $_POST["question3"];
    	$q4 = $_POST["question4"];
    	$q5 = $_POST["question5"];

    
        //First Question Results
    	echo "1) What year was first Motorcycle invented?";
	    echo "<br>";
    	echo "      Your answer: $q1";
	    echo "<br>";
    	echo "      Correct answer: 1885";
	    echo "<br>";
	    echo "<br>";


        //Second Question Results
    	echo "2) Which is NOT a human sense?";
	    echo "<br>";
    	echo "      Your answer: $q2";
	    echo "<br>";
    	echo "      Correct answer: Echolocation";
	    echo "<br>";
	    echo "<br>";

    	//Third Question Results
    	echo "3) What year did World War 2 end?";
	    echo "<br>";
    	echo "      Your answer: $q3";
	    echo "<br>";
    	echo "      Correct answer: 1945";
	    echo "<br>";
	    echo "<br>";

    	//Fourth Question Results
    	echo "3) What year was the first Nobel Prize awarded?";
	    echo "<br>";
    	echo "      Your answer: $q4";
	    echo "<br>";
    	echo "      Correct answer: 1901";
	    echo "<br>";
	    echo "<br>";

        //Fifth Question Results
    	echo "5) What year was The Great Gatsby originally published?";
	    echo "<br>";
    	echo "      You answered: $q5";
	    echo "<br>";
    	echo "      Correct answer: 1925";
	    echo "<br>";
	    echo "<br>";

        //Cluster of 'if' statements to add together the user's score.
        $num = 0;
        if ($q1 == "1885")
        {
            $num++;		
        }
        if ($q2 == "Echolocation")
        {
            $num++;		
        }
        if ($q3 == "1945")
        {
            $num++;		
        }
        if ($q4 == "1901")
        {
            $num++;		
        }
        if ($q5 == "1925")
        {
            $num++;		
        }

        $grade = ($num/5)*100;

        //Provide user with results
        echo "You got $num correct!";
        echo "<br>";
        echo "Which is a $grade%!"; 
?>
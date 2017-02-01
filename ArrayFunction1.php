<html>
    <p>
	<?php
	// Create an array and push on the names
    // of your closest family and friends
    $family = array();
    array_push($family, "Aipo");
    array_push($family, "Mary");
    array_push($family, "Jacob");
    array_push($family, "Jonas");
    echo count($family);
	// Sort the list
	print "   ";
	sort($family);
	print join(", ", $family);

	// Randomly select a winner!
    $r = rand(0,strlen($family[0]-1)); 
	// Print the winner's name in ALL CAPS
	
	echo " -> The winner is: ".strtoupper($family[$r]);
	?>
	</p>
</html>

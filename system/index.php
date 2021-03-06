<?php

include_once 'header.php';
include_once 'classes/api.class.php';


if (isset($_GET["error"])) {
	if ($_GET["error"] == "emptyinput") {
		echo "<p>Fill in all fields!</p>";
	}
	else if ($_GET["error"] == "invaliduid") { 
		echo "<p>Choose a proper username!</p>";
	}
	else if ($_GET["error"] == "invalidemail") { 
		echo "<p>Choose a proper email!</p>";
	}
	else if ($_GET["error"] == "passwordsdontmatch") { 
		echo "<p>Passwords doesn't match!</p>";
	}
	else if ($_GET["error"] == "usernametaken") { 
		echo "<p>Username already taken!</p>";
	}
	else if ($_GET["error"] == "emailtaken") { 
		echo "<p>Email already taken!</p>";
	}
	else if ($_GET["error"] == "emailtaken") { 
		echo "<p>Email already taken!</p>";
	}
	else if ($_GET["error"] == "none") { 
		echo "<p>You have signed up!</p>";
	}
	else if ($_GET["error"] == "stmtfailed") { 
		echo "<p>Something went wrong, try again!</p>";
	}
}

?>

<!-- Inline **** -->
<style>
	input  {
		  margin: 20px !important;
		  width: 50% !important;
		  height: 40px !important;
		}
	button {
		  margin: 20px !important;
		  width: 51% !important;
		  height: 40px !important;
		  cursor: pointer;
	}
</style>

<!-- Home -->
<div id="container">
	  <div class="inner">
		<div id="content"> 
		  <div>
			
			<form action="stats.php" method="get">
				  <input type="text" name="value" placeholder="Enter Steam Name, Id, or URL..." />
				  <input type="submit" value="Submit">
			</form>
			
		  </div>
		</div>
	  </div>
</div>


<?php

include_once("footer.php");

?>
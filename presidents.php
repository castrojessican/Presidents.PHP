<!-- exercise from pages 146- 147 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Presidential Terms</title>
	<link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation&family=Edu+VIC+WA+NT+Beginner:wght@500&family=Ibarra+Real+Nova:wght@500&display=swap" rel="stylesheet">
	<style>
		body {
			background-color: red;
		}

		h2 {
			font-family: 'Edu NSW ACT Foundation', cursive;
			color: royalblue;
			text-shadow: 2px 2px 1px white;
			font-size: 2.2em;
		}

		p {
			font-size: 1.7 em;
		}

	</style>
</head>
<body>
	<h2>U.S. Presidents and their Terms</h2>
	<br/>
	<br/>
	<?php 
		$Presidents = array(
				"George Washingtion",
				 "John Addams",
				 "James Madison",
				 "James Monroe");

		$YearsInOffice = array(
		    "1789 to 1797", "1797 to 1801", "1801 to 1809",
		     "1809 to 1817", "1817 to 1825");

		$OutputTemplate = "<p>President [NAME] served from [TERM]</p>\n";

		foreach ($Presidents as $Sequence => $Name) {
			$TempString = str_replace("[NAME]", $Name, $OutputTemplate);
			$OutputString = str_replace("[TERM]",
				$YearsInOffice[$Sequence],
				$TempString);
			    echo $OutputString;
		}
	?>
</body>
</html>
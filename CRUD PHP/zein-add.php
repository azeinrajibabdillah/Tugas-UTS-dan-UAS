<html>
<head>
	<title>Add Data</title>
</head>

<body>
<div style="margin: auto 15% ;">
<?php include("zein-header.php"); ?>
<?php


if(isset($_POST['Submit'])) {	
	
		

		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	
}
?>
<?php include("zein-footer.php"); ?>
</div>
</body>
</html>

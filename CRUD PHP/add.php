<html>
<head>
	<title>Add Data</title>
</head>

<body>
<div style="margin: auto 15% ;">
<?php include("zein-header.php"); ?>
	<a href="index.php">Home</a>
	<br/><br/>

	<form action="zein-add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	<?php include("zein-footer.php"); ?>
	</div>
</body>
</html>


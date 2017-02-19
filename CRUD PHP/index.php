<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<div style="margin: auto 15% ;">
<?php include("zein-header.php"); ?>

<a href="add.php">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td></td>
	</tr>

	<tr>
		<td>Azein</td>
		<td>26</td>
		<td>Azein@gmail.com</td>
		<td><?php echo "<a href=\"zein-edit.php?id=1\">Edit</a> | <a href=\"zein-delete.php?id=1\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";	?></td>
	</tr>

	</table>
	<?php include("zein-footer.php"); ?>
	</div>
</body>
</html>

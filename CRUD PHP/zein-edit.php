<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
<div style="margin: auto 15% ;">
<?php include("zein-header.php"); ?>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="index.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="Azein"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value="25"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="azein@gmail.com"> </td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=""></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
<?php include "zein-footer.php" ; ?>
</div>
</body>
</html>

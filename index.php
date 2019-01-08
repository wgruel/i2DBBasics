<?php
//including the database connection file
include_once("config.php");
$result = mysqli_query($link, "SELECT * FROM phrases ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>Phrases</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<table>

	<tr>
		<td>ID</td>
		<td>Phrase</td>
		<td>Update</td>
		<td>Delete</td>
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['ID']."</td>";
		echo "<td>".$res['text']."</td>";
        echo "<td><a href=\"edit.php?id=" . $res['ID'] . "\">Edit</a></td>"; 
        echo "<td><a href=\"delete.php?id=" . $res['ID'] . "\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
<?php
include_once("config.php");
if(isset($_POST['update'])){	
	$id = mysqli_real_escape_string($link, $_POST['id']);
	$phrase = mysqli_real_escape_string($link, $_POST['phrase']);
	
	if(empty($id) || empty($phrase)) {	
			
		if(empty($id)) {
			echo "<div class='error'>ID is empty.</div>";
		}
		
		if(empty($phrase)) {
            echo "<div class='error'>Phrase is empty.</div>";
        }
		
    } 
    else {	
        $sql = "UPDATE phrases SET `text` = '" . $phrase . "' WHERE id = " . $id;

        echo $sql; 
        
        $result = mysqli_query($link, $sql);
        
        if ($result == 1){
            header("Location: index.php");
        }
        else {
            echo "<div class='error'>An Error occured: " . mysqli_error($link).  "</div>";
            echo "<br/><a href='index.php'>View Phrases</a>";
        }        


	}
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($link, "SELECT * FROM phrases WHERE id = " . $id);
while($res = mysqli_fetch_array($result)) {
	$ID = $res['ID'];
	$phrase = $res['text'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="updateForm" method="post" action="edit.php">
		<table>
			<tr> 
				<td>ID</td>
				<td><input type="text" name="ID" value="<?php echo $id;?>"></td>
			</tr>
			<tr> 
				<td>Phrase</td>
				<td><input type="text" name="phrase" value="<?php echo $phrase;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id;?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
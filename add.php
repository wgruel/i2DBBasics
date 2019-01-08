<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
include_once("config.php");
if(isset($_POST['Submit'])) {	
	$phrase = mysqli_real_escape_string($link, $_POST['phrase']);
		
	if(empty($phrase)) {

		if(empty($phrase)) {
			echo "<div class='error'>Phrase is empty.</div>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } 
    else { 
        $query = "INSERT INTO phrases(`text`) VALUES('" . $phrase . "')"; 
        $result = mysqli_query($link, $query);
        if ($result == 1){
            echo "<div class='success'>Data added successfully.</div>";
            echo "<br/><a href='index.php'>View Result</a>";
        }
        else {
            echo "<div class='error'>An Error occured: " . mysqli_error($link).  "</div>";
            echo "<br/><a href='index.php'>View Result</a>";

        }
		
	}
}
?>
</body>
</html>